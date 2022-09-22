@extends('layouts.layout')

@section('content')
    <div class="outerContainer">
        <div class="mainContainer">
            <div class="cardBanner"></div>
            <div class="tableList">
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Event name">
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <input type="text" placeholder="Location">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="datePicker"></label>
                            <input type="date" name="datePicker">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Starting at</label>
                            <input type="time" name="beginTime" placeholder="">
                            <label for="endTime">Ending at</label>
                            <input type="time" name="endTime" placeholder="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea type="text" placeholder="Discription"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="foodIncluded" placeholder="0">
                            <label for="foodIncluded">Food Included</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" min="0" placeholder="Pricing">
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label for="colorPicker">Card color</label>
                            <input type="color" name="colorPicker">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection