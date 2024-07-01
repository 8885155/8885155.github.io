$(function(){
    var tools=[
        {name:'此电脑',url:'http://sj.ysupan.com/8885155#/',icon:'./img/imageres_2.ico'},
        {name:'浏览器',url:'./bing.html/',icon:'./img/k.webp'},
       {name:'流量卡网厅①',url:'https://haokawx.lot-ml.com/Product/Index/551526',icon:'./img/a.webp'},
        {name:'流量卡网厅②',url:'https://hk.yunhaoka.cn/#/pages/micro_store/index?agent_id=6cb2c0fb7667ef94b967e505d8255dd7',icon:'./img/b.webp'},
        {name:'流量卡网厅③',url:'https://wap.kaboshihaoka.com/show/?agent_id=69398',icon:'./img/c.webp'},
        {name:'流量卡网厅④',url:'https://index.feihuang.vip/hk/index?st=1&sc=24032122153306',icon:'./img/d.webp'},
        {name:'代理注册',url:'./llk/dl.html',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/43c244d52c9d2eb76b5163287bde0c3acab9474b09d25c36c67a837fa60a0b9e2d418ab8392fa120f1b5463dc64e5dce?pictype=scale&from=30111&version=3.3.3.3&fname=PicsArt_05-28-09.01.21.jpg&size=1024'},
        {name:'生成海报',url:'http://lm.05321888.com:88/hkzs/page/hb/index.html',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/127f2675dd321c9f7f9ec6bcf5c9df245d1531d7390cac59a56a354f96b2d5558d4784995acd4cbdbd9c12f29dcd63bc?pictype=scale&from=30111&version=3.3.3.3&fname=PicsArt_05-28-07.05.21.jpg&size=1024'},
        {name:'早报',url:'https://www.woshipm.com/news',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/556197ac6b5b89689ce060a10ca77dde6727e49c17ffe14dba03cea9ea60a53033aa9f0c234362b44d8bd4c9491ad7de?pictype=scale&from=30111&version=3.3.3.3&fname=u%3D2015335363%2C3143986395%26fm%3D253%26fmt%3Dauto%26app%3D138%26f%3DJPEG.webp&size=1024'},
       {name:'安全检测',url:'https://detail.aiuys.com/',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/00fa17d69e57bb892e1258921711334f7764c967918d3c8434de469a222763e83adfc52b188d443bdd6289cb1a304c2f?pictype=scale&from=30111&version=3.3.3.3&fname=PicsArt_05-29-02.57.25.jpg&size=1024'},
        {name:'工具箱',url:'https://tool.browser.qq.com/',icon:'https://m4.publicimg.browser.qq.com/publicimg/nav/qbtool/qbtool-latest.png'},
        {name:'流量消耗',url:'./tool/ll',icon:'./img/llk.png'},
        {name:'壁纸图片',url:'./tool/bz',icon:'./img/j.webp'},
        {name:'随机视频',url:'https://api.lolimi.cn/dy/',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/2c1c8fb9ec2320d8efe53ac2cb48279b3396ac163254d2ccbf2dcc8c578c70df1d91c4131bb773990f7a2c88776ebdb7?pictype=scale&from=30111&version=3.3.3.3&fname=icon_1711384802009.jpeg&size=1024'},
        {name:'游戏',url:'https://xingye.me/game/index.php',icon:'./img/g.webp'},
        {name:'影视',url:'https://www.bei5dy.com/',icon:'./img/h.webp'},
        {name:'直播',url:'./tool/ds',icon:'./img/l.webp'},
        {name:'音乐',url:'https://tools.liumingye.cn/music/?page=searchPage#/recent',icon:'https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/a89916f469fd6d47b88662c73f94fec26a624d62ef514c8790a392906b2b3875f78629d6a6a6e50bff239b64ac8dbd14?pictype=scale&from=30111&version=3.3.3.3&fname=u%3D3242640730%2C2816196037%26fm%3D253%26fmt%3Dauto%26app%3D138%26f%3DJPEG.webp&size=1024'},
        {name:'毒日记',url:'http://20.re/h5.html#/',icon:'http://20.re/favicon.ico'},

    ]
    for(var i in tools){
        var tool=tools[i]
        var item="<li class='pc-icon desktoptools' data='"+JSON.stringify(tool)+"'>"+
        '<img class="mypc" src="'+tool.icon+'" />'+
        '<div>'+tool.name+'</div>'+
        '</li>';
        $('.desktop-list').append(item)
    }

   
    $('.desktoptools').click(function(){
        var data =JSON.parse($(this).attr('data'))
       // $('.right-top img').eq(0).click()
        layer.open({
            type: 2,
            title: data.name,
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['88%', '95%'],
            content: data.url
          });
    })



})
