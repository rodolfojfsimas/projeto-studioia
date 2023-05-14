<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Illuminate\Support\HtmlString;

class Inteligencia extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Inteligencia>
     */
    public static $model = \App\Models\Inteligencia::class;

    public static function label()
    {
        return __('Artigo IA');
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Image::make(__('Imagem'), 'imagem')->disk('public'),
            Text::make(__('Título'), 'titulo')->sortable(),
            Text::make(__('Subtítulo'), 'subtitulo')->sortable(),
            Text::make(__('Data'), 'data'),

            Textarea::make(__('Content'), 'content')
                ->displayUsing(function ($value) {
                    $formattedValue = nl2br(e($value)); // Convert newlines to <br> tags and escape HTML entities
                    return new HtmlString("<pre>{$formattedValue}</pre>"); // Wrap the value in <pre> tags
                }),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
