@extends('admin.layouts.master')

@section('content')

                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Reviews Records</h4>
                        <a href="{{ route('admin.review.create')}}">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        {{-- <p class="card-description"></code> --}}
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Photo </th>
                              <th> Name </th>
                              <th> Job </th>
                              <th> Description </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            {{--  @foreach ($reviews as $review)  --}}
                            <tr>
                              <td>  id  </td>
                              <td> <img src="{{ asset('import/assets/admin/fonts/Ubuntu/Ubuntu-Medium.woff') }}" alt="image"> </td>
                              {{-- <td> <i class="fab {{ $service -> icon }}"  aria-hidden="true"></i></td> --}}
                              <td>  name  </td>
                              <td> job  </td>
                              <td>
                                <p class="text-wrap">
                                   description
                                </p>
                                {{-- {{ substr($service -> description,0,30) }}  ... --}}
                                </td>
                              <td>
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href="{{ route('admin.index') }}">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="{{ route('admin.index')}}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="style="display: inline"">Delete</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                {{--  @endforeach  --}}
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
{{--
            </div>
        </div> --}}
@endsection
