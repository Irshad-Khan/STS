
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
                <td style="text-align: center; width: 370px;">
                    <a href="" class="btn btn-warning action-btn-size"><i class="fa fa-eye"></i> View</a>
                    <a href="" class="btn btn-primary action-btn-size"><i class="fa fa-edit"></i> Update</a>
                    <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger action-btn-size"><i class="fa fa-trash"></i> Delete</a>
                </td>
                </tr>
            @endforeach        
