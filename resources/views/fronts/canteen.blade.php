@extends('layouts.master')
@section('content')

<div class="container py-4">

    <!-- 1. LIQ AUTH -->
    <div class="section-box">
        <h3 class="section-title">Liq Auth</h3>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Brig</th>
                    <th>Lt to Col</th>
                    <th>Nb Sub to Sub Maj</th>
                    <th>Sep to Hav</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12</td>
                    <td>10</td>
                    <td>06</td>
                    <td>04</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>05</td>
                    <td>03</td>
                    <td>02</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="main-section-box">
        <!-- 2. CANTEEN TIME -->
        <div class="section-box canteen">
            <h3 class="section-title">Canteen Timing</h3>

            <p class="sub-title">Timings</p>
            <p>
                09:00 to 16:00 Hr <br>
                <strong>Lunch Time:</strong> 13:00 to 14:00 hr <br>
                16:00 to 17:00 hr <br>
                Lay out of store Next Day
            </p>
        </div>


        <!-- 3. CARD DETAILS -->
        <div class="section-box canteen">
            <h3 class="section-title">Card Details</h3>

            <p>
                <strong>Dec to Till Date:</strong> ––– <br>
                <strong>Complete Card:</strong> 857 <br>
                <strong>Under Process:</strong> 165
            </p>
        </div>

    </div>


    <!-- 4. AFD ITEMS -->
    <div class="section-box">
        <h3 class="section-title">AFD Items</h3>

        <table class="table afd-table">
            <thead>
                <tr>
                    <th style="width: 60px;">S/No</th>
                    <th>Nomenclature</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mattress</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Brief Case</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Chimney</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>JMG</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Shoes</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sun Glasses</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Fan</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Gyser</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Room Heaters</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Gas Burner</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Induction</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Leader</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Sewing Machine</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Vaccum Cleaner</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Watches</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Air Fryer</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Tables</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Hawkins 22 Ltr Cooker</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Ovens</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Air Conditioner</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Washing Machines</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Refrigerator</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>LED TV</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Water Purifiers</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Electronic Cookers</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Food Processors</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Chairs</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Blender</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>






@endsection