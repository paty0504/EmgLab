@extends('layout.index')
@section('content')

<div id="page-title">
		<div class="width-container paged-title">
			<h1>Tuyển Thành Viên Lab</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
  <div  style="padding-bottom: 40px;" class="width-container detail">
      <p class="paragraph">Tuyển thành viên....</p>
      <p class="paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
      <button> <a href="apply">Đăng ký</a> </button>

  </div>
  <style>
      .paragraph{
          font-size: 20px;
      }
      .detail{
          padding-top: 20px
      }
      button{
          float: right;
          margin-top: 20px;
        width: 100px;
        height: 40px;
        font-size: 17px
        
      }
  </style>
@endsection