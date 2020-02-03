<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Course;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index')->with('courses', Course::paginate(10))->with('categories', Categorie::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create')->with('categories', Categorie::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "category_id" => "required"
        ]);

        $course = Course::create([
            "name" => $request->name,
            "description" => $request->description,
            "category_id" => $request->category_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back();
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('courses.edit')->with('course', Course::find($id))->with('categories', Categorie::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "category_id" => "required"
        ]);

        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->slug = Str::slug($request->name);
        $course->save();
        return redirect()->route('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $image = Image::find($id);

        $course->delete();
        $image->delete();
        return redirect()->route('courses');
    }

    public function listCourse()
    {
        return view('index')->with('courses', Course::all())->with('images', Image::all())->with('categories', Categorie::all());
    }
}
