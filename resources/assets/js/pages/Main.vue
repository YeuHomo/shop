<template>
    <div>
    <!-- <div class="header"> -->
       <header></header>
    <!-- </div> -->

    <main class="main" role="main">
    <div class="container">
        <div class="row" id="post-list">

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v4">
                    <h2 class="post-title">
                        <a href="http://laracon.us/" onclick="" target="_blank">第一天</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="http://laracon.us/" onclick="" target="_blank">
                          <img src="http://image.youzhan.org/a/73/9af35813487edd4f4bbba872584a4.png!thumb" width="700" height="438" alt="Laracon 2018" >
                        </a>
                    </div>

                </article>
            </div>


            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a href="http://react-primer.com/" onclick="" target="_blank">第二天</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="http://react-primer.com/" onclick="" target="_blank">
                          <img src="http://image.youzhan.org/1/63/814023c847ddb963666c0cf7659e9.png!thumb" width="700" height="438" alt="React Primer" >
                        </a>
                    </div>

                </article>
            </div>


            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a href="https://jupyter.org/" onclick="" target="_blank">第三天</a>
                    </h2>.
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="https://jupyter.org/" onclick="" target="_blank">
                          <img src="http://image.youzhan.org/8/bf/ac9a41ddae977f79ba9cdcb67e17a.png!thumb" width="700" height="438" alt="Project Jupyter" onload="">
                        </a>
                    </div>

                </article>
            </div>


            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a href="http://litta.co/" onclick="" target="_blank">第四天</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="http://litta.co/" onclick="" target="_blank">
                          <img src="http://image.youzhan.org/7/03/99a9324cf00781024a52b7aa4739f.png!thumb" width="700" height="438" alt="Litta App" >
                        </a>
                    </div>

                </article>
            </div>

        </div>
        <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
        </nav>
    </div>
</main>
</div>
</template>


<script>
    import header from './Header.vue'

    export default {
        data() {
            return {

            }
        },
        methods:{

        },
        mounted:function () {

        }
    }
</script>
<style>
/*  .header: {
      background: #222;
      background-repeat: no-repeat;
      background-position: center 0;
      -webkit-background-size: cover;
      background-size: cover;
      padding: 138px 0 0;
      text-align: center;
      min-height: 400px;
      position: relative;
  }*/
</style>