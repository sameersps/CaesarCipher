
 <form   class="form_validation_reg" enctype="multipart/form-data" accept-charset="UTF-8" action="{{ route('encode_it') }}" method="POST">
{{ csrf_field() }}


     <div class="formSep">
                    <div class="row-fluid">
                        <div class="span6">
                            <p>
                                <label>Shift Count</label>
                                <input type="text" name="shift_count" class="span12" value=""/>
                            </p>
                            <p>
                                 <label>String</label>
                                <input type="text" name="str" class="span12" value=""/>
                             </p>   
                             @if(!empty($encodedStr))
                             <p>Encoded String: {{$encodedStr}} </p>
                             @endif
                        </div>
                    </div>
                </div>


    <input type="submit" value="Encode It">

 </form>

 <p>
     
 <form   class="form_validation_reg" enctype="multipart/form-data" accept-charset="UTF-8" action="{{ route('decode_it') }}" method="POST">
 
{{ csrf_field() }}

     <div class="formSep">
                    <div class="row-fluid">
                        <div class="span6">
                             
                            <p>
                                 <label>String To Be Decoded</label>
                                <input type="text" name="str" class="span12" value="{{!empty($encodedStr)?$encodedStr:''}}"/>

 </p>  
 <p>
                                 <label>Shift COunt</label>
                                <input type="text" name="shiftCnt" class="span12" value="{{!empty($shiftCnt)?$shiftCnt:''}}"/>
                             </p>  

                              


                             @if(!empty($decodedStr))
                             <p>Decoded String: {{$decodedStr}}   </p>
                             @endif
                        </div>
                    </div>
                </div>


    <input type="submit" value="Decode It">

 </form>

 </p>