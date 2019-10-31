
            @foreach ($workhistory as $key => $val )
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $val->employee->name }}</td>
                <td><input type="text" name="suitqty" id="suitqty" value="{{ $val->suitqty }}" class="form-control field-style suitqty" disabled></td>
                <td><input type="text" name="shirtqty" id="shirtqty" value="{{ $val->shirtqty }}" class="form-control field-style shirtqty" disabled></td>
                <td><input type="text" name="pantqty" id="pantqty" value="{{ $val->pantqty }}" class="form-control field-style pantqty" disabled></td>
                <td><input type="text" name="suitprice" id="suitprice" value="{{ $val->suitprice }}" class="form-control field-style suitprice" disabled></td>
                <td><input type="text" name="shirtprice" id="shirtprice" value="{{ $val->shirtprice }}" class="form-control field-style shirtprice" disabled></td>
                <td><input type="text" name="pentprice" id="pentprice" value="{{ $val->pentprice }}" class="form-control field-style pentprice" disabled></td>
                <td><input type="text" name="totalprice" id="totalprice" value="{{ $val->totalprice }}" class="form-control field-style totalprice" readonly></td>
                <td style="text-align: center;">
                    <a href="{{ url('employee/workhistory/edit/'.$val->id ) }}" class="btn btn-primary action-btn-size updateworkhistory"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{ url('employee/workhistory/delete/'.$val->id ) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger action-btn-size"><i class="fa fa-trash"></i> Delete</a>
                </td>
                </tr>
            @endforeach        
