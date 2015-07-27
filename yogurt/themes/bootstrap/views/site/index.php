<?php
$this->pageCaption='';
$this->pageDescription = "";
$this->pageTitle=Yii::app()->name;
?>
<?php $this->beginWidget(
    'booster.widgets.TbJumbotron',
    array(
        'heading' => 'Welcome to '.CHtml::encode(Yii::app()->name).'',
        'htmlOptions' => array(
            'class'=>'',
        ),
    )
); ?>

<p><?=Yii::t('app', 'Stay on with your favourite series!')?></p>

<p><?php
    echo CHtml::link('Learn more',
        array(
            '/site/page',
            'view'=>'about'
        ),
        array(
            'class' => 'btn btn-primary btn-lg'
        )
    );
?></p>

<?php $this->endWidget(); ?>
<img src = "/img/1.jpg" class = "img-circle" style = "max-width: 24.4%;">
<img src = "/img/2.jpg" class = "img-circle" style = "max-width: 24.4%;">
<img src = "/img/3.jpg" class = "img-circle" style = "max-width: 24.4%;">
<img src = "/img/4.jpg" class = "img-circle" style = "max-width: 24.4%;">
<?php
VarDumper::dump($siteFindResult);
//$this->widget(
//    'booster.widgets.TbCarousel',
//    array(
//        'items' => array(
//            array(
//                'image' => '/img/placeholder.jpg',
//                'label' => 'First Thumbnail label',
//                'caption' => 'First Caption.'
//            ),
//            array(
//                'image' => '/img/placeholder.jpg',
//                'label' => 'Second Thumbnail label',
//                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
//            ),
//            array(
//                'image' => '/img/placeholder.jpg',
//                'label' => 'Third Thumbnail label',
//                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
//            ),
//        ),
//        'htmlOptions' => array(
//            'class'=>'',
//        ),
//    )
//);
?>


<!--$json = '{"id":1,"crawlerType":4,"items":[{"siteId":"0","urlContentResponse":null,"siteObj":{"fetchType":1,"id":"0","uDate":null,"tcDate":null,"cDate":null,"resources":null,"iterations":null,"description":null,"urls":[],"filters":[],"properties":{},"state":null,"priority":null,"maxURLs":null,"maxResources":null,"maxErrors":null,"maxResourceSize":null,"requestDelay":null,"httpTimeout":null,"errorMask":null,"errors":null,"urlType":null,"contents":null,"processingDelay":null,"size":null,"avgSpeed":null,"avgSpeedCounter":null,"userId":null,"recrawlPeriod":null,"recrawlDate":null,"maxURLsFromPage":null,"collectedURLs":null},"urlObj":{"status":2,"linksI":0,"linksE":0,"contentMask":0,"processingTime":0,"CDate":null,"mRateCounter":0,"httpTimeout":60000,"size":0,"urlPut":null,"batchId":0,"lastModified":null,"tagsCount":0,"mRate":0,"charset":"","state":0,"httpCode":0,"priority":0,"maxURLsFromPage":0,"processingDelay":0,"crawlingTime":0,"type":1,"processed":0,"totalTime":0,"siteSelect":0,"contentType":"","pDate":null,"errorMask":0,"httpMethod":"get","eTag":"","siteId":"0","freq":0,"tcDate":null,"rawContentMd5":"","crawled":0,"UDate":null,"contentURLMd5":"","requestDelay":0,"depth":0,"parentMd5":"","urlUpdate":null,"tagsMask":0,"urlMd5":"b7632cc979f402538f516e48379f9101","url":"http://www.theguardian.com/law/2015/may/15/eurosceptic-david-davis-could-oppose-government-on-human-rights-reform"},"urlPutObj":{"putDict":{},"urlMd5":"b7632cc979f402538f516e48379f9101","contentType":0,"siteId":"0","fileStorageSuffix":null,"criterions":null},"properties":{"DB_TASK_MODE":"RO","HTTP_REDIRECTS_MAX":5,"HTML_REDIRECTS_MAX":5,"HTML_RECOVER":"0","PROCESSOR_PROPERTIES":"{\"algorithm\":{\"algorithm_name\":\"user_name_algorithm\"},\"modules\":{\"user_name_algorithm\":[\"ScrapyExtractor\",\"GooseExtractor\",\"NewspaperExtractor\"]}}","template":{"templates":[{"output_format":{"name":"json","header":"[\n","items_header":"","item":"{\n\"pubdate\":\"%pubdate%\",\n\"title\":\"%title%\",\n\"description\":\"%description%\",\n\"media\":\"%media%\",\n\"author\":\"%author%\",\n\"dc_date\":\"%dc_date%\",\n\"link\":\"%link%\",\n\"keywords\":\"%keywords%\",\n\"content_encoded\":\"%content_encoded%\",\n\"html_lang\":\"%html_lang%\",\n\"pubdate_extractor\":\"%pubdate_extractor%\",\n\"title_extractor\":\"%title_extractor%\",\n\"description_extractor\":\"%description_extractor%\",\n\"media_extractor\":\"%media_extractor%\",\n\"author_extractor\":\"%author_extractor%\",\n\"dc_date_extractor\":\"%dc_date_extractor%\",\n\"link_extractor\":\"%link_extractor%\",\n\"keywords_extractor\":\"%keywords_extractor%\",\n\"content_encoded_extractor\":\"%content_encoded_extractor%\",\n\"html_lang_extractor\":\"%html_lang_extractor%\",\n\"crawler_time\":\"%crawler_time%\",\n\"scraper_time\":\"%scraper_time%\",\n\"errors_mask\":\"%errors_mask%\"\n}\n","items_footer":"","footer":"]\n"},"tags":{"pubdate":{"default":""},"title":{"default":""},"description":{"default":""},"media":{"default":""},"author":{"default":""},"dc_date":{"default":""},"link":{"default":""},"keywords":{"default":""},"content_encoded":{"default":""},"html_lang":{"default":""},"errors_mask":{"default":""}},"priority":100,"mandatory":1,"is_filled":0}],"select":"first_nonempty"}},"urlId":"b7632cc979f402538f516e48379f9101"}]}';-->
<!--//VarDumper::dump(json_decode($json, true));-->