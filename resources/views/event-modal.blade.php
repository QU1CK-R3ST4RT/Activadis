@extends('layouts.layout')

@section('content')
    <div class="outer-container">
        <div class="main-container">
            <div class="card-banner"></div>
            <div class="table-list">
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Event name" class="textfields">
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <input type="text" placeholder="Location" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="datePicker"></label>
                            <input type="date" name="datePicker" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Starting at</label>
                            <input type="time" name="beginTime" placeholder="" class="textfields">
                            <label for="endTime">Ending at</label>
                            <input type="time" name="endTime" placeholder="" class="textfields">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea type="text" placeholder="Discription" class="description-textfield"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="foodIncluded" placeholder="0" class="textfields">
                            <label for="foodIncluded">Food Included</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" min="0" placeholder="Pricing" class="textfields">
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label for="colorPicker">Card color</label>
                            <input type="color" name="colorPicker" class="textfields">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection