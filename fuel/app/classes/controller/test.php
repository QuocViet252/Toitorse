<?php

class Controller_Test extends Controller_Template
{

	public function action_index()
	{
		return Response::forge(Presenter::forge('test'));
	}

}
