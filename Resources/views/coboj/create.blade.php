@extends('theme::'.env('ADMIN_THEME').'.master')
@section('title') {{ $title=trans('coboj::messages.fill') }}
@stop
@section('content')

<div class="container clearfix">

    <!-- Post Content
					============================================= -->
    <div class="postcontent nobottommargin clearfix">

        <div class="single-post nobottommargin">

            <!-- Single Post
							============================================= -->
            <div class="entry clearfix">

                <!-- Entry Title
								============================================= -->
                <div class="entry-title">
                    <h2>{{$type->name}}</h2>
                </div><!-- .entry-title end -->


                <!-- Entry Content
								============================================= -->
                <div class="entry-content notopmargin">


                    {{-- {!! $type->decoration !!} --}}
                    {{-- <div class="clear"></div> --}}

                    <form action="/coboj/store" method="POST">
                        @csrf

                        <input type="hidden" name="type_id" value="{{$type->id}}" />

                        @foreach($type->parent_fields() as $field)

                        @if($field->type=='text')
                        <div class="form-group">
                            {!! Form::label('',$field->name,['class'=>'col-md-2 control-label']) !!}
                            <div class="col-sm-3">
                                <input type="text" name="fields[{{$field->id}}_text]"
                                    placeholder="{{$field->default_value}}" @if($field->is_optional==0)
                                required @endif/>

                            </div>
                        </div>
                        @elseif($field->type!='file')
                        <div class="form-group">
                            {!! Form::label('',$field->name,['class'=>'col-md-2 control-label']) !!}
                            <div class="col-sm-3">
                                @if($field->type=="select")
                                <div class="parentive">
                                    <select class="form-control parentive" name="fields[{{$field->id}}_select]">
                                        <option disabled="" selected="">
                                            {{trans('coboj::messages.choose')}}
                                        </option>
                                        @foreach($field->options as $option)
                                        <option fieldid="{{$field->id}}" optionid="{{$option->id}}"
                                            value="{{$option->id}}_{{$option->value}}">
                                            {{$option->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>



                                @elseif($field->type=="checkbox")
                                <div class="parentive checkbox">

                                    @foreach($field->options as $option)
                                    <div class="form-group">
                                        <label style="margin-right:10px " for="checkbox_{{$option->id}}">
                                            <h5>
                                                {{ $option->name }}
                                            </h5>
                                        </label>
                                        <input class="pull-right styled"
                                            name="fields[{{$field->id}}_checkbox_{{$option->id}}]" type="checkbox"
                                            fieldid="{{$field->id}}" optionid="{{$option->id}}"
                                            value="{{$option->id}}_{{$option->value}}" id="checkbox_{{$option->id}}">

                                    </div>
                                    @endforeach
                                </div>

                                @elseif($field->type=="radio")


                                <div class="parentive radio">



                                    @foreach($field->options as $option)

                                    <div class="form-group">
                                        <label style="margin-right:10px " for="radio_{{$option->id}}">
                                            <h5>
                                                {{ $option->name }}
                                            </h5>
                                        </label>
                                        <input class="pull-right" id="radio_{{$option->id}}"
                                            name="fields[{{$field->id}}_radio]" type="radio" fieldid="{{$field->id}}"
                                            optionid="{{$option->id}}" value="{{$option->id}}_{{$option->value}}">

                                    </div>

                                    @endforeach
                                </div>
                                @endif

                                <div id="field_{{$field->id}}">
                                </div>
                            </div>
                        </div>

                        @endif
                        <h6 class="col-sm-offset-2">
                            {{$field->tips}}
                        </h6>

                        <hr />

                        @endforeach

                        <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                            class="button button-3d nomargin">ارسال</button>

                    </form>

                </div>
            </div><!-- .entry end -->


        </div>

    </div><!-- .postcontent end -->



</div>


@stop

@section('scripts')
<script src="/modules/coboj/coboj_field_show.js"></script>
@endsection