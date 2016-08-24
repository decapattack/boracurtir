<?php

class TipoEstabelecimentosController extends \BaseController {

	/**
	 * Display a listing of tipoestabelecimentos
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipoestabelecimentos = Tipoestabelecimento::all();

		return View::make('tipoestabelecimentos.index', compact('tipoestabelecimentos'));
	}

	/**
	 * Show the form for creating a new tipoestabelecimento
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tipoestabelecimentos.create');
	}

	/**
	 * Store a newly created tipoestabelecimento in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tipoestabelecimento::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tipoestabelecimento::create($data);

		return Redirect::route('tipoestabelecimentos.index');
	}

	/**
	 * Display the specified tipoestabelecimento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tipoestabelecimento = Tipoestabelecimento::findOrFail($id);

		return View::make('tipoestabelecimentos.show', compact('tipoestabelecimento'));
	}

	/**
	 * Show the form for editing the specified tipoestabelecimento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipoestabelecimento = Tipoestabelecimento::find($id);

		return View::make('tipoestabelecimentos.edit', compact('tipoestabelecimento'));
	}

	/**
	 * Update the specified tipoestabelecimento in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tipoestabelecimento = Tipoestabelecimento::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tipoestabelecimento::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tipoestabelecimento->update($data);

		return Redirect::route('tipoestabelecimentos.index');
	}

	/**
	 * Remove the specified tipoestabelecimento from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tipoestabelecimento::destroy($id);

		return Redirect::route('tipoestabelecimentos.index');
	}

}
