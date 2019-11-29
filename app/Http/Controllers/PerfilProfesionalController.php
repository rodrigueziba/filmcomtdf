<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerfilProfesional;
use App;
use Auth;
use Session;
Use Image;

class PerfilProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
{
    $this->middleware('auth');
}
    public function index(PerfilProfesional $model)
    {
       // return view('perfilesprofesionales.index', ['perfiles' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idiomas = App\Idioma::all();
        $areas = App\AreaDesempenio::all();
        return view('perfilesprofesionales.create')->withIdiomas($idiomas)->withAreas($areas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$perfil = PerfilProfesional::create($request->all());
         $perfil = new PerfilProfesional($request->all());
        $perfil->usuario_id = Auth::user()->id;
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path ('images/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
            $perfil->profile_image = $filename;}    
        $perfil->save();

//$post = new Post;
    //    $post->title = $request->title;
      //  $post->slug = $request->slug;
       // $post->category_id = $request->category_id;
        //$post->body = $request->body;
        //$post->save();
        $perfil->areadesempenio()->sync($request->area_id, false);
        $perfil->idiomas()->sync($request->idioma_id, false);
        Session::flash('success', 'Perfil creado con éxito');
        //return redirect()->route('posts.show', $post->id);


      return back()->with('mensaje', 'Perfil Profesional Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = App\PerfilProfesional::findOrFail($id);

    return view('perfilprofesional.detalle', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        $idiomas = App\Idioma::all();
        $areas = App\AreaDesempenio::all();
         $perfil = App\PerfilProfesional::findOrFail($id);
    return view('perfilesprofesionales.edit')->withPerfil($perfil)->withIdiomas($idiomas)->withAreas($areas);
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
       $perfil = new PerfilProfesional($request->all());
        $perfil->usuario_id = Auth::user()->id;
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path ('images/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
            $perfil->profile_image = $filename;}    
        $perfil->save();

//$post = new Post;
    //    $post->title = $request->title;
      //  $post->slug = $request->slug;
       // $post->category_id = $request->category_id;
        //$post->body = $request->body;
        //$post->save();
        $perfil->areadesempenio()->sync($request->area_id );
        $perfil->idiomas()->sync($request->idioma_id);
        Session::flash('success', 'Perfil actualizado con éxito');
        //return redirect()->route('posts.show', $post->id);


      return back()->with('mensaje', 'Perfil Profesional Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}