@extends('layouts.app')

@section('content')

	<div class="container col-sm-8">

		<h2> Atlantic Chat Space </h2><br/>

		<div class="row" id="app">

			<div class="col-8 offset-2">
				<li class="list-group-item list-group-item-primary"> Start a chat! <span class="badge badge-pill badge-light">@{{ numberOfUsers }}</span><span class="badge badge-pill badge-secondary">@{{ typing }}</span></li><br/>

				<ul class="list-group" v-chat-scroll>

					<message 
					v-for="value, index in chat.message"
					:key = value.index
					:color = chat.color[index]
					:user = chat.user[index]
					:time = chat.time[index]
					>
						@{{ value }}
					</message><br/><br/>

				</ul>
				
				  <input type="text" name="message" class="form-control" v-model="message" @keyup.enter="send">
				  <small class="form-text text-muted">Say hi to the world! Start your message here.</small>
				  <br>
				  <a href='' class="btn btn-danger btn-sm" @click.prevent='deleteSession'>Clear Chat History</a>
				  
			</div>
		</div>
	</div>

@endsection