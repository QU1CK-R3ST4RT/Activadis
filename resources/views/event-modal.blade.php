@extends('layouts.layout')

    <div class="outer-container">
        <div class="main-container">
            <div class="card-banner"></div>
            <div class="table-list">
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Event name" class="textfields" value={{$name ?""}}>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <input type="text" placeholder="Location" class="textfields" value={{$location ?""}}>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="datePicker"></label>
                            <input type="date" name="datePicker" class="textfields" value={{$date ?""}}>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="beginTime">Starting at</label>
                            <input type="time" name="beginTime" placeholder="" class="textfields" value={{$start_time ?""}}>
                            <label for="endTime">Ending at</label>
                            <input type="time" name="endTime" placeholder="" class="textfields" value={{$end_time ?""}}>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea type="text" placeholder="Description" class="description-textfield" value={{$description ?""}}></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="foodIncluded" placeholder="0" class="textfields" value={{$food_included ?false}}>
                            <label for="foodIncluded">Food Included</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" min="0" placeholder="Pricing" class="textfields" value={{$price ?""}}>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label for="colorPicker">Card color</label>
                            <input type="color" name="colorPicker" class="textfields" value={{$color ?""}}>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>