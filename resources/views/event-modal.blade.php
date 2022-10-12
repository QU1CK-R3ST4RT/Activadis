@extends('layouts.layout')

@section('content')
<div class="outer-container mt-10 mx-5">
    <div class="main-container">
        <div class="card-banner" style="background: {{ $event->color ?? "" }} !important;"></div>
        <div class="table-list">
            <form action="" method="POST">
                @csrf
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Event name" name="name" class="textfields" value="{{$event->name ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Location" name="location" class="textfields" value="{{$event->location ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="datePicker"></label>
                            <input type="date" name="date" class="textfields" value="{{$event->date ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Starting at</label>
                            <input type="time" name="start_time" placeholder="" class="textfields" value="{{$event->start_time ?? ""}}">
                            <label for="endTime">Ending at</label>
                            <input type="time" name="end_time" placeholder="" class="textfields" value="{{$event->end_time ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea type="text" placeholder="Description" name="description" class="description-textfield" value="{{$event->description ?? ""}}"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="food_included" placeholder="0" class="textfields" value="{{$event->food_included ?? false}}">
                            <label for="foodIncluded">Food Included</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" min="0" placeholder="Pricing" name="price" class="textfields" value="{{$event->price ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="colorPicker">Card color</label>
                            <input type="color" name="color" class="textfields" value="{{$event->color ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="border border-gray-800 p-5"> verstuur</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
