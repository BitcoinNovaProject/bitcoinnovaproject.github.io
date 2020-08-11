$(document).ready(function(){
    
    $("#spanish").on('click',function(event){
        (function(){
          $("[data-translate]").jqTranslate('assets/lang/es',{forceLang: 'es'});
        })();
    });

      
    $("#english").on('click',function(event){
          (function(){
            $("[data-translate]").jqTranslate('assets/lang/en',{forceLang: 'en'});
          })();
    });

    $("#french").on('click',function(event){
      (function(){
        $("[data-translate]").jqTranslate('assets/lang/fr',{forceLang: 'fr'});
      })();
    });

    $("#russian").on('click',function(event){
      (function(){
        $("[data-translate]").jqTranslate('assets/lang/ru',{forceLang: 'ru'});
      })();
    });

    $("#chinese").on('click',function(event){
      (function(){
        $("[data-translate]").jqTranslate('assets/lang/cn',{forceLang: 'cn'});
      })();
    });

    $("#korean").on('click',function(event){
      (function(){
        $("[data-translate]").jqTranslate('assets/lang/kr',{forceLang: 'kr'});
      })();
    });

    $("#japanese").on('click',function(event){
      (function(){
        $("[data-translate]").jqTranslate('assets/lang/jp',{forceLang: 'jp'});
      })();
    });

});