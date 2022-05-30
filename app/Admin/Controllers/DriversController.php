<?php

namespace App\Admin\Controllers;

use App\Models\Driver;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DriversController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Driver';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Driver());

        $grid->column('driverId', __('DriverId'));
        $grid->column('url', __('Url'));
        $grid->column('givenName', __('GivenName'));
        $grid->column('familyName', __('FamilyName'));
        $grid->column('dateOfBirth', __('DateOfBirth'));
        $grid->column('nationality', __('Nationality'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Driver::findOrFail($id));

        $show->field('driverId', __('DriverId'));
        $show->field('url', __('Url'));
        $show->field('givenName', __('GivenName'));
        $show->field('familyName', __('FamilyName'));
        $show->field('dateOfBirth', __('DateOfBirth'));
        $show->field('nationality', __('Nationality'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Driver());

        $form->url('url', __('Url'));
        $form->text('givenName', __('GivenName'));
        $form->text('familyName', __('FamilyName'));
        $form->date('dateOfBirth', __('DateOfBirth'))->default(date('Y-m-d'));
        $form->text('nationality', __('Nationality'));

        return $form;
    }
}
