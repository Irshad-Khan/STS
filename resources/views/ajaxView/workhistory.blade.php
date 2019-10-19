<hr>
<h3 style="text-align: center; margin-top: 30px; margin-bottom: 30px; color: #629270;">Employee Work Reocrd</h3>
<hr>
 <table id="tableID" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>#</th>
                <th>Employee</th>
                <th>Suit Quantity</th>
                <th>Shirt Quantity</th>
                <th>Pent Quantity</th>
                <th>Price Par Suit</th>
                <th>Price Par Shirt</th>
                <th>Price Par Pent</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (json_decode($workhistory) as $key => $val )
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $val->employee_id }}</td>
                <td>{{ $val->suitqty }}</td>
                <td>{{ $val->shirtqty }}</td>
                <td>{{ $val->pantqty }}</td>
                <td>{{ $val->suitprice }}</td>
                <td>{{ $val->shirtprice }}</td>
                <td>{{ $val->pentprice }}</td>
                <td>{{ $val->totalprice }}</td>
                <td style="text-align: center;">
                    <a href="" class="btn btn-warning action-btn-size"><i class="fa fa-eye"></i> View</a>
                    <a href="" class="btn btn-primary action-btn-size"><i class="fa fa-edit"></i> Update</a>
                    <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger action-btn-size"><i class="fa fa-trash"></i> Delete</a>
                </td>
                </tr>
            @endforeach        
        </tbody>
   </table>