@extends('layouts.code')

@section('title')
    <title>Code</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <h2>Code</h2>
        <pre><code class="html">
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Login form&lt;/title&gt;
                &lt;link rel=&quot;stylesheet&quot; href=&quot;//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css&quot;&gt;
                &lt;link rel=&quot;stylesheet&quot; href=&quot;//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css&quot;&gt;
                &lt;link rel=&quot;stylesheet&quot; href=&quot;//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css&quot;&gt;
            &lt;/head&gt;
            &lt;body&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;form class=&quot;form-horizontal&quot; role=&quot;form&quot; method=&quot;POST&quot; action=&quot;http://verde.tools/auth/login&quot;&gt;
                    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;1Y4mo2vnYX96GC3mjTUJD0HZKuJIQ9XaBVcRXrNJ&quot;&gt;
                    &lt;div class=&quot;form-group&quot;&gt;
                        &lt;label class=&quot;col-md-4 control-label&quot;&gt;Email&lt;/label&gt;
                        &lt;div class=&quot;col-md-6&quot;&gt;
                            &lt;input class=&quot;form-control&quot; type=&quot;email&quot; name=&quot;email&quot; value=&quot;&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-group&quot;&gt;
                        &lt;label class=&quot;col-md-4 control-label&quot;&gt;Password&lt;/label&gt;
                        &lt;div class=&quot;col-md-6&quot;&gt;
                            &lt;input class=&quot;form-control&quot; type=&quot;password&quot; name=&quot;password&quot; id=&quot;password&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-group&quot;&gt;
                        &lt;div class=&quot;checkbox col-md-offset-4 col-md-6&quot;&gt;
                            &lt;label&gt;
                                &lt;input type=&quot;checkbox&quot; name=&quot;remember&quot;&gt; Remember Me
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-group&quot;&gt;
                        &lt;div class=&quot;col-md-6 col-md-offset-4&quot;&gt;
                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Login&lt;/button&gt;
                            &lt;a href=&quot;http://verde.tools/auth/register&quot; class=&quot;btn btn-default&quot;&gt;New user&lt;/a&gt;
                            &lt;a href=&quot;http://verde.tools/auth/email&quot; class=&quot;btn btn-default&quot;&gt;Forgot password&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
            &lt;script src=&quot;//code.jquery.com/jquery-2.1.4.min.js&quot;&gt;&lt;/script&gt;
            &lt;script src=&quot;//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
            &lt;/body&gt;
            &lt;/html&gt;
        </code></pre>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            //JS code goes here
        });
    </script>
@endsection
