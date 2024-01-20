<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Type;
use App\Models\Banner;
use App\Models\Facility;
use App\Models\Advantage;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'content' => "main/home/index",
            'banners' => Banner::where('index', '<>', '0')->orderBy('index')->get(),
            'advantages' => Advantage::where('index', '<>', '0')->orderBy('index')->get(),
            'facilities' => Facility::where('index', '<>', '0')->orderBy('index')->get(),
            'types' => Type::where('index', '<>', '0')->orderBy('index')->get(),
            'categories' => Category::where('index', '<>', '0')->orderBy('index')->get(),
            'blogs' => Blog::where('index', '<>', '0')->orderBy('index')->take(5)->get(),
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function blog()
    {
        $shownBlogPerPage = 6;

        $page = Request()->input("page");
        $page = $page ? $page : 1;

        // $search = Request()->input("search");
        // ["title", 'like', '%' . $search . '%'  ],
        $blogs = Blog::where([ ['index', '<>', '0']])->orderBy("index");

        $totalPage = count($blogs->get()) == 0 ? 0 : ceil(count($blogs->get()) / $shownBlogPerPage);

        $shownBlogList = count($blogs->get()) == 0 ? null :
        $blogs->orderBy("created_at", "DESC")->offset($shownBlogPerPage * ($page - 1))->limit($shownBlogPerPage)->get();

        $data = [
            'content' => "main/blog/all",
            'blogs' => $shownBlogList ,
            'totalPage' => $totalPage,
            'page' => $page,
            // 'search' => $search,
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function searchBlog(Request $request)
    {
        $data = $request->validate([
            'category' => 'required',
            'searchBlogString' => 'sometimes',
        ]);

        return redirect("/blog?search=" . $data['searchBlogString']);
    }

    public function detailBlog($id)
    {
        $data = [
            'content' => "main/blog/detail",
            'blog' => Blog::find($id),
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function showType(Category $category)
    {
        $filteredCategory = Category::with(['types' => function ($query) {
            $query->where('index', '>', 0)->orderBy('index');
        }])->where("id", $category->id)->first();

        $data = [
            'content' => "main/type/index",
            'category' => $filteredCategory,
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function showBlog(Blog $blog)
    {
        $data = [
            'content' => "main/blog/index",
            'blog' => $blog,
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function about()
    {

        $data = [
            'content' => "main/about/index",
        ];

        return view("main.layouts.wrapper", $data);

    }

    public function contact()
    {
        $data = [
            'content' => "main/contact/index",
        ];

        return view("main.layouts.wrapper", $data);
    }

    public function gallery()
    {
        $shownGalleryPerPage = 10;

        $page = Request()->input("page");
        $page = $page ? $page : 1;

        $galleries = Gallery::where([ ['index', '<>', '0']])->orderBy("index");

        $totalPage = count($galleries->get()) == 0 ? 0 : ceil(count($galleries->get()) / $shownGalleryPerPage);

        $shownGalleryList = count($galleries->get()) == 0 ? null :
        $galleries->orderBy("created_at", "DESC")->offset($shownGalleryPerPage * ($page - 1))->limit($shownGalleryPerPage)->get();

        $data = [
            'content' => "main/gallery/all",
            'galleries' => $shownGalleryList ,
            'totalPage' => $totalPage,
            'page' => $page,
        ];

        return view("main.layouts.wrapper", $data);
    }
}