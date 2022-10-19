@extends('layouts.layout')

@section('content')
<div class="outer-container mx-5">
    <div class="main-container">
        <div class="card-banner" style="background: {{ $event->color ?? "" }} !important;"></div>
        <div class="table-list">
            <form action="" method="POST">
                @csrf
                <table>
                    <input type="text" class="hidden" value="{{$event->id}}" name="id">
                    <tr>
                        <td>
                            <Label>Event naam</Label>
                            <input type="text" placeholder="" name="name" class="textfields" value="{{$event->name ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Location">Locatie</label>
                            <input type="text" placeholder="" name="location" class="textfields" value="{{$event->location ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Begin</label>
                            <input type="datetime-local" name="start_time" class="textfields" value="{{$event->start_time}}">
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <label for="endTime">Eind</label>
                            <input type="datetime-local" name="end_time" class="textfields" value="{{$event->end_time}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Description">Beschrijving</label>
                            <textarea type="text" placeholder="" name="description" class="description-textfield">{{$event->description ?? ""}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="foodIncluded">Inclusief eten</label>
                            <input type="checkbox" name="food_included" placeholder="" class="textfields" value="{{$event->food_included ?? false}}">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Prijs</p>
                            <input type="number" min="0" placeholder="Pricing" name="price" class="textfields" value="{{$event->cost ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Deelnemers</p>
                            <label for="minParticipant">Min</label>
                            <input type="number" min="0" name="minParticipant" class="textfields input-number mb-2" value="{{$event->min_people ?? 0}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="maxParticipants">Max</label>
                            <input type="number" min="0" name="maxParticipants" class="textfields input-number mb-2" value="{{$event->max_people ?? 0}}">
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
                            <label for="file">Afbeelding</label>
                            <input type="text" name="image" class="textfields" value="{{$event->image ?? ""}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn-custom"> verstuur</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
