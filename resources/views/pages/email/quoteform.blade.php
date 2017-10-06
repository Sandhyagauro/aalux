<h2>You have a new instant quote from Aalux</h2>


{{--@include('inc.header')--}}
<table class="bg-main">
    <tr>
        <td>
            <table class="container">
                <tr>
                    <td class="section">
                        <table class="table-details">
                            <tbody>
                            <tr>
                                <th colspan="2" class="table-details-title">Contact Information</th>
                            </tr>
                            <tr>
                                <th>Pick Up Address:</th>
                                <td>{{$data['pickupaddress']}}</td>
                            </tr>
                            <tr>
                                <th>Drop Off Address</th>
                                <td>{{$data['dropoffaddress']}}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$data['date']}}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{$data['time']}}</td>
                            </tr>

                            </tbody>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


{{--@include('inc/footer')--}}