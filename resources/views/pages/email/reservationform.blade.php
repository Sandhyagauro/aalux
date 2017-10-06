<h2>You have a new reservation from Aalux</h2>


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
                                <th>Name</th>
                                <td>{{$data['fullname']}}</td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td>{{$data['phonenumber']}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data['email']}}</td>
                            </tr>
                            <tr>
                                <th>Passengers</th>
                                <td>{{$data['passengers']}}</td>
                            </tr>
                            <tr>
                                <th>Luggage</th>
                                <td>{{$data['luggage']}}</td>
                            </tr>
                            <tr>
                                <th>Child Seats</th>
                                <td>{{$data['child_seats']}}</td>
                            </tr>
                            <tr>
                                <th>Pick up Address</th>
                                <td>{{$data['pickupaddress']}}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$data['date']}}</td>
                            </tr>

                            <tr>
                                <th>Vehicle Type</th>
                                <td>{{$data['vehicletype']}}</td>
                            </tr>
                            <tr>
                                <th>Drop off Address</th>
                                <td>{{$data['dropoffaddress']}}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{$data['time']}}</td>
                            </tr>
                            <tr>
                                <th>Service Type</th>
                                <td>{{$data['servicetype']}}</td>
                            </tr>
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$data['payment_type']}}</td>
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