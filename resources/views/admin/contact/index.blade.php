@extends('admin.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @include('admin.layouts.partials.breadcrumb', ['panel' => 'Contact'])


       <div class="container-fluid">
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Contact List</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                   <table class="table table-bordered">
                       <thead>
                       <tr>
                           <th style="width: 10px">#</th>
                           <th>Full Name ( Email ) </th>
                           <th>Subject</th>
                           <th>Description</th>
                           <th>Status</th>
                           <th>Action
                           </th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($data['contact_list'] as $index => $contact)
                           <tr>
                               <td>{{ ++$index }}.</td>
                               <td>
                                   {{ $contact['full_name'] }}
                                   <code>( {{ $contact['email'] }} )</code>
                               </td>
                               <td>
                                   {{ $contact['subject'] }}
                               </td>
                               <td>
                                   {{ $contact['description'] }}
                               </td>
                               <td>
                                   <span class="badge bg-{{ $contact['status'] == \Foundation\Lib\ContactStatus::SEEN ? 'primary' : 'danger' }}">
                                       {{ $contact['status'] == \Foundation\Lib\ContactStatus::SEEN ? 'Seen' : 'Unseen' }}
                                   </span>
                               </td>
                               <td class="flex">
                                   <a href="{{ route('admin.contact.show', $contact['id']) }}" class="btn btn-sm btn-primary">
                                       <i class="fa fa-eye"></i>
                                   </a>
                                   <a href="#" class="btn btn-sm btn-danger">
                                       <i class="fa fa-trash"></i>
                                   </a>
                               </td>
                           </tr>
                       @endforeach

                       </tbody>
                   </table>
               </div>
               <!-- /.card-body -->
               <div class="card-footer clearfix">
                   {{ $data['contact_list']->links() }}

               </div>
           </div>
       </div>

    </div>
@endsection