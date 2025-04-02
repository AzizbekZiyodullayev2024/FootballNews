<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Games;
use App\Models\Team;
use App\Models\Tournament;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Date;
use MoonShine\Fields\Select;
use MoonShine\Contracts\Fields\Field;

/**
 * @extends ModelResource<Games>
 */
class GamesResource extends ModelResource
{
    protected string $model = Games::class;

    protected string $title = 'Games';
    
    /**
     * @return Field[]
     */
    protected function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Select::make('Team 1', 'team1_id')
                ->options(Team::pluck('name', 'id')->toArray())
                ->sortable(),
            Select::make('Team 2', 'team2_id')
                ->options(Team::pluck('name', 'id')->toArray())
                ->sortable(),
            Number::make('Score 1', 'score1')->sortable(),
            Number::make('Score 2', 'score2')->sortable(),
            Date::make('Match Date', 'match_date')->sortable(),
            Text::make('Stadium', 'stadium')->sortable(),
            Select::make('Tournament', 'tournament_id')
                ->options(Tournament::pluck('name', 'id')->toArray())
                ->sortable(),
        ];
    }

    /**
     * @return Field[]
     */
    protected function formFields(): array
    {
        return [
            Box::make('Game Details', [
                Select::make('Team 1', 'team1_id')
                    ->options(Team::pluck('name', 'id')->toArray())
                    ->required(),
                Select::make('Team 2', 'team2_id')
                    ->options(Team::pluck('name', 'id')->toArray())
                    ->required(),
                Number::make('Score 1', 'score1')->default(0)->required(),
                Number::make('Score 2', 'score2')->default(0)->required(),
                Date::make('Match Date', 'match_date')->required(),
                Text::make('Stadium', 'stadium')->required(),
                Select::make('Tournament', 'tournament_id')
                    ->options(Tournament::pluck('name', 'id')->toArray())
                    ->required(),
            ]),
        ];
    }

    /**
     * @return Field[]
     */
    protected function detailFields(): array
    {
        return [
            ID::make(),
            Select::make('Team 1', 'team1_id')
                ->options(Team::pluck('name', 'id')->toArray()),
            Select::make('Team 2', 'team2_id')
                ->options(Team::pluck('name', 'id')->toArray()),
            Number::make('Score 1', 'score1'),
            Number::make('Score 2', 'score2'),
            Date::make('Match Date', 'match_date'),
            Text::make('Stadium', 'stadium'),
            Select::make('Tournament', 'tournament_id')
                ->options(Tournament::pluck('name', 'id')->toArray()),
        ];
    }

    /**
     * @param Games $item
     *
     * @return array<string, string[]|string>
     */
    protected function rules(mixed $item): array
    {
        return [
            'team1_id' => ['required', 'exists:teams,id'],
            'team2_id' => ['required', 'exists:teams,id'],
            'score1' => ['required', 'integer'],
            'score2' => ['required', 'integer'],
            'match_date' => ['required', 'date'],
            'stadium' => ['required', 'string', 'max:255'],
            'tournament_id' => ['required', 'exists:tournaments,id'],
        ];
    }
}
