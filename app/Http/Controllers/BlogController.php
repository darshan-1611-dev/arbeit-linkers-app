<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * List of all Articles at website.
     */
    public function index()
    {
        $posts = Blog::query()->latest()->get();

        return view('admin.post.post', compact('posts'));
    }

    /**
     * Detail view of article.
     *
     * @param $id
     * @return Factory|View
     */
    public function detailView($id)
    {
        $post = Blog::query()->where('id', $id)->first();

        return view('admin.post.post', compact('post'));
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
                $html = '<a class="link-primary" href="' . url('dashboard/user-details/' . $row->slug . '') . '">view blog</a>';
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
                $html = "update and delete";
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
     */
    public
    function edit()
    {

    }

    /**
     * Update blog details.
     */
    public
    function update()
    {

    }

    /**
     * Delete Blog.
     */
    public
    function delete()
    {

    }
}
