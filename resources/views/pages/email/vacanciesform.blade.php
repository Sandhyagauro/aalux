<h2>You have a new vacancy from Aalux</h2>


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
                                <th>First Name:</th>
                                <td>{{$data['firstname']}}</td>
                            </tr>
                            <tr>
                                <th>Last Name:</th>
                                <td>{{$data['lastname']}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number:</th>
                                <td>{{$data['phonenumber']}}</td>
                            </tr>
                            <tr>
                                <th>Postcode</th>
                                <td>{{$data['postcode']}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data['email']}}</td>
                            </tr>
                            <tr>
                                <th>PCO License No.</th>
                                <td>{{$data['licensenumber']}}</td>
                            </tr>
                            <tr>
                                <th>Vehicle Made</th>
                                <td>{{$data['vehiclemade']}}</td>
                            </tr>
                            <tr>
                                <th>Vehicle Model</th>
                                <td>{{$data['vehiclemodel']}}</td>
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