<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * List of all Articles at website.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        if ($request->get('search_post')) {

            $posts = Blog::search($request->get('search_post'))
                ->where("status", 1)
                ->get();
        } else {
            $posts = Blog::query()->where("status", 1)->latest()->get();
        }

        return view('blog.blogs', compact('posts'));
    }

    /**
     * Detail view of article.
     *
     * @param $slug
     * @return Factory|View
     */
    public function detailView($slug)
    {
        $post = Blog::query()->where('slug', $slug)->first();

        // update view of blog
        $this->updateView($post->id);

        return view('blog.blog-detail', compact('post'));
    }

    public function updateView($id)
    {
        if (!empty($id)) {
            Blog::query()->find($id)->increment('views');
        }
    }

    /**
     * List all blog at Admin Dashboard.
     */
    public function listBlogs()
    {
        $total_blogs_count = Blog::query()->count();
        $total_blogs_views = Blog::query()->sum('views');
        $total_active_blogs_count = Blog::query()->where("status", '=', 1)->count();

        return view('admin.blog.index', compact('total_blogs_count', 'total_blogs_views', 'total_active_blogs_count'));
    }

    /**
     * List all blog at Admin Dashboard.
     */
    public function listBlogsDatatable()
    {
        $data = Blog::query()->get();

        return Datatables::of($data)->addIndexColumn()
            ->editColumn('id', function ($row) {
                return "#" . $row->id;
            })
            ->editColumn('slug', function ($row) {
                $html = '<a class="link-primary" href="' . url('blog/' . $row->slug . '') . '">view blog</a>';
                return $html;
            })
            ->editColumn('status', function ($row) {
                $html = $row->status == 1 ? '<span class="status completed">Active</span>' : '<span class="status pending">Inactive</span>';
                return $html;
            })
            ->editColumn('created_at', function ($row) {
                return date('d M y', strtotime($row->created_at));
            })
            ->addColumn('action', function ($row) {
                $html = '<a href="' . url('dashboard/edit-blog/' . $row->id . '') . '"><button class="btn btn-sm btn-primary">update</button></a> <a  href="' . url('dashboard/delete-blog/' . $row->id . '') . '"><button class="btn btn-sm btn-danger">delete</button></a>';
                return $html;
            })
            ->rawColumns(['id', 'slug', 'status', 'created_at', 'action'])
            ->make(true);
    }

    /**
     * Create Blog page.
     */
    public
    function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store Data of BLog.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public
    function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_content' => 'required',
            'slug' => 'required|unique:blogs'
        ]);

        $post_title = $request->post('blog_title');
        $post_content = $request->post('blog_content');
        $post_status = $request->post('status');
        $post_slug = $request->post('slug');
        $post_slug_edited = Str::slug($post_slug); // again edit slug

        $last_inserted_id = Blog::query()->create([
            'blog_title' => $post_title,
            'blog_content' => $post_content,
            'slug' => $post_slug_edited,
            'status' => $post_status,
        ])->id;

        $image_path = '';

        if ($request->file('featured_image')) {
            $image_path = $request->file('featured_image')->store('blogs', 'public');
        }

        Blog::query()->where("id", '=', $last_inserted_id)->update([
            "featured_image" => $image_path
        ]);

        return redirect('dashboard/blogs');
    }

    /**
     * Edit article form.
     *
     * @param $id
     * @return Factory|View
     */
    public
    function edit($id)
    {
        $blog_data = Blog::query()->find($id);

        return view('admin.blog.update', compact('blog_data'));
    }

    /**
     * Update blog details.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public
    function update(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_content' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $request->post('id')
        ]);

        Blog::query()
            ->where("id", $request->post('id'))
            ->update([
                'blog_title' => $request->post('blog_title'),
                'blog_content' => $request->post('blog_content'),
                'slug' => $request->post('slug'),
                'status' => $request->post('status'),
            ]);

        if ($request->file('featured_image')) {
            $image_path = $request->file('featured_image')->store('blogs', 'public');

            Blog::query()->where("id", '=', $request->post('id'))->update([
                "featured_image" => $image_path
            ]);
        }

        return redirect('dashboard/blogs');

    }

    /**
     * Delete Blog.
     *
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public
    function delete($id)
    {
        Blog::query()->where('id', $id)->delete();

        return redirect('dashboard/blogs');
    }
}
