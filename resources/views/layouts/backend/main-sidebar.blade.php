 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
         <div class="pull-left image">
             <img src="{{ url(\Auth::User()->getUserImage()) }}" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
             <p>{{ \Auth::User()->getFullName() }}</p>
             <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
     </div>
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a href="{{ url('') }}" target="_blank"><i class="fa fa-eye"></i> <span>View Website</span></a>
        </li>
        <li class="header">USER NAVIGATION</li>
        {!! MenuHelper::GetAccountMenu() !!}
     </ul>
 </section>
 <!-- /.sidebar -->