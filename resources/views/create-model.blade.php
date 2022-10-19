@extends('layouts.page-layout')

@section('content')
<div class="outer-container mx-5">
    <div class="main-container">
        <div class="card-banner" style="background: #04173E;"></div>
        <div class="table-list">
            <form action="" method="POST">
                @csrf
                <table>
                    <input type="text" class="hidden" name="id">
                    <tr>
                        <td>
                            <Label>Event naam</Label>
                            <input type="text" placeholder="" name="name" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Location">Locatie</label>
                            <input type="text" placeholder="" name="location" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Begin</label>
                            <input type="datetime-local" name="start_time" class="textfields">
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <label for="endTime">Eind</label>
                            <input type="datetime-local" name="end_time" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Description">Beschrijving</label>
                            <textarea type="text" placeholder="" name="description" class="description-textfield"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="foodIncluded">Inclusief eten</label>
                            <input type="checkbox" name="food_included" placeholder="" class="textfields">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Prijs</p>
                            <input type="number" min="0" placeholder="Pricing" name="price" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Deelnemers</p>
                            <label for="minParticipant">Min</label>
                            <input type="number" min="0" name="minParticipant" class="textfields input-number mb-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="maxParticipants">Max</label>
                            <input type="number" min="0" name="maxParticipants" class="textfields input-number mb-2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="colorPicker">Card color</label>
                            <input type="color" name="color" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="file">Afbeelding</label>
                            <input type="text" name="image" class="textfields">
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
