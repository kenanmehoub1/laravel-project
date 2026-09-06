<?php

namespace App\Filament\Resources\Properties\Pages;

use App\Filament\Resources\Properties\PropertyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

use Filament\Actions;

use Filament\Schemas\Components\Tabs\Tab; // ✅ استيراد Tab
use Illuminate\Database\Eloquent\Builder;

class ListProperties extends ListRecords
{
    protected static string $resource = PropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
      // ✅ أضف هذه الدالة هنا
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All')
                ->badge($this->getModel()::count()),
            
            'available' => Tab::make('Available')
                ->badge($this->getModel()::where('is_available', true)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_available', true)),
            
            'unavailable' => Tab::make('Unavailable')
                ->badge($this->getModel()::where('is_available', false)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_available', false)),
        ];
    }
   protected function getHeaderWidgets(): array
{
    return [
        ...PropertyResource::getWidgets(), // ✅ استخدام spread operator
    ];
}
}
