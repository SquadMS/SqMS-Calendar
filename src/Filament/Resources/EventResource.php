<?php

namespace SquadMS\Calendar\Filament\Resources;

use SquadMS\Calendar\Filament\Resources\EventResource\Pages;
use SquadMS\Calendar\Models\Event;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use SquadMS\Foundation\Resources\Concerns\Translatable;
use Carbon\Carbon;

class EventResource extends Resource
{
    use Translatable;
    
    protected static ?string $navigationGroup = 'Calendar Management';

    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->rules('required|string|min:1|max:255')
                    ->required(),
                Forms\Components\MarkdownEditor::make('description')
                    ->nullable(),
                
                Forms\Components\Toggle::make('all_day')
                    ->default(true)
                    ->required(),
              
                Forms\Components\DateTimePicker::make('start')
                    ->default(Carbon::now())
                    ->required(),
                Forms\Components\DateTimePicker::make('end')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('start')->sortable(),
                Tables\Columns\TextColumn::make('end')->sortable(),
                Tables\Columns\BooleanColumn::make('all_day')->sortable(),
            ])
            ->filters([
                //
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvent::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
