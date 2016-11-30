<style>
    .tab {
        border-bottom: 1px solid #003d4c;
        display: table;
        width: 100%;
    }
    .tab > li {
        display: table-cell;
        vertical-align: middle;
        float: left;
        list-style-type: none;
        padding: 10px 10px;
        cursor: pointer;
    }
    .active {
        background-color: #003d4c;
        color: #ffffff;
        font-weight: bold:
    }
    .tab-content {
        padding: 10px 30px;
    }
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	$(function(){
		$(".tab-content").hide(); //タブの内容を一括で非表示にする
		$("#tab1").show(); //#tab1の内容だけ表示させておく
		$(".tab li").click(function() { //他のタブをクリックしたときに動作が発生する
			$(".tab li").removeClass("active"); //アクティブだったタブを非アクティブにする
			$(".tab-content").hide(); //アクティブだったタブの内容を隠す
			$(this).addClass("active"); //クリックした要素をthisで取得する 
						    //active属性を加えて、アクティブにする
			var target = $(this).data("target"); //dara-targetの属性の値を取得
			$('#' + target).show(); //クリックしたタブの内容を表示
		});
	});
</script>

<h3>タブメニュー</h3>
<?=$this->Session->flash('auth')?>

<ul class="tab">
    <li class="active" data-target="tab1">javascript</a></li>
    <li data-target="tab2">jQuery</li>
    <li data-target="tab3">Node.js</li>
</ul>

<p class="tab-content" id="tab1">
    javascriptの話です<br>
    javascriptは昔は実はあまりよくないものというイメージがありました<br>
</p>

<p class="tab-content" id="tab2">
    jQueryの話です<br>
    jQueryがあることで簡単にコーディングできるようになりました<br>
</p>

<p class="tab-content" id="tab3">
    Node.jsの話です<br>
    PHPのようにサーバーサイドのプログラムをjavascriptでもかけるようになります<br>
</p>
