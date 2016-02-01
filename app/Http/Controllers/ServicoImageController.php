<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ServicoImage;

class ServicoImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$imagens=ServicoImage::whereProduto_id($request->input('servico_id'))->get();
      	$nr_imagens=count($imagens);

      
      if ($nr_imagens < 3 ){
      	# code...
      	$servicoImage = new ServicoImage;

      // upload the image //
	      $file = $request->file('userfile');
	      $destination_path = 'uploads/';
	      $filename = str_random(6).'_'.$file->getClientOriginalName();
	      $file->move($destination_path, $filename);
	      
	      // save image data into database //
	      $servicoImage->file = $destination_path . $filename;
	      $servicoImage->caption = $request->input('nome');
	      //$image->description = $request->input('description');
	      $servicoImage->produto_id = $request->input('servico_id');
	      $servicoImage->isexist="true";
	      $servicoImage->save();

	      return redirect('/servico')->with('message','You just uploaded an image!');

      }
      else {
      	 return "Excedeu o numero de imagens";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
