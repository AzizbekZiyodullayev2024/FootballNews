<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Team>
 */
class TeamResource extends ModelResource
{
    protected string $model = Team::class;

    protected string $title = 'Teams';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make('ID','team_id')->sortable(),
            Text::make('Name', 'name')->sortable(),
            Text::make('Country', 'country'),
            Text::make('League', 'league'),
            Text::make('Stadium', 'stadium'),
            Text::make('Coach', 'coach'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make('Team Info', [
                ID::make(),
                Text::make('Name', 'name')->required(),
                Text::make('Country', 'country'),
                Text::make('League', 'league'),
                Text::make('Founded Year', 'founded_year')->required(),
                Text::make('Stadium', 'stadium'),
                Text::make('Coach', 'coach'),
                Text::make('Logo URL', 'logo_url'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Name', 'name'),
            Text::make('Country', 'country'),
            Text::make('League', 'league'),
            Text::make('Founded Year', 'founded_year'),
            Text::make('Stadium', 'stadium'),
            Text::make('Coach', 'coach'),
            Image::make('Logo', 'logo_url'),
        ];
    }

    /**
     * @param Team $item
     *
     * @return array<string, string[]|string>
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'country' => ['nullable', 'string', 'max:50'],
            'league' => ['nullable', 'string', 'max:100'],
            'founded_year' => ['nullable', 'digits:4'],  // This should be here, not in formFields.
            'stadium' => ['nullable', 'string', 'max:100'],
            'coach' => ['nullable', 'string', 'max:100'],
            'logo_url' => ['nullable', 'url'],
        ];
    }
}
