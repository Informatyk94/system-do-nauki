@extends('master')
@section('content')
    <a href="/panel">
        <h1 class="title_research">SYSTEM B</h1>
    </a>
    <h1>Szukaj</h1>
    <br />
    <form id="app" >
        <div class="form-group search-wrapper">
            <input type="text" class="form-control" id="name" v-model="search" placeholder="Wyszukaj po tytule..">
        </div>

        <div class="container">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tytuł</th>
                    <th>Kategoria</th>
                    <th>Opis</th>
                    <th>Dodał</th>
                </tr>

                </thead>
                <tbody v-for="post in filteredList">


                    <tr>
                            <td>@{{ post.id }}</td>
                            <td>@{{ post.title }}</td>
                            <td>@{{ post.category }}</td>
                            <td>@{{ post.content_problem }}</td>
                            <td>@{{ post.name }}</td>
                            <td><a v-bind:href="post.link">Link</a></td>
                    </tr>







        </tbody>
        </table>
        </div>


        {{--<div class="wrapper">--}}
            {{--<div class="card" v-for="post in filteredList">--}}
                {{--<a  target="_self">--}}
                    {{--<small>posted by: @{{ post.category }}</small>--}}
                    {{--@{{ post.title }}--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}



    </form>
<script>
    class Post {
        constructor(id, title, category, content_problem) {
            this.id = id;
            this.title = title;
            this.category = category;
            this.content_problem = content_problem;
            this.name = name;
            this.link = "/show/" + id;
        }
    }

    const app = new Vue ({
        el: '#app',
        data: {
            search: '',
            postList : [
                @foreach($problems as $problem)
                    new Post(
                        '{{$problem->id}}',
                        '{{$problem->title}}',
                        '{{$problem->category}}',
                        '{{str_limit($problem->content_problem, $limit=30) }}',
                        name = '{{$problem->user->name}}',
                        '{{$problem->id}}'

                    ),
                @endforeach
            ]
        },
        computed: {
            filteredList() {
                return this.postList.filter(post => {
                    return post.title.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        }
    })
</script>

@stop
