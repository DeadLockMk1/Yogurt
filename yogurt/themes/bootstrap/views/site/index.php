<?php
$this->pageCaption='Yo!Gurt';
$this->pageDescription = "Stay on with your favourite series!";
$this->pageTitle=Yii::app()->name;
?>

<h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
<h3>Index page</h3>
<?php
    $grid = array(
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
        array(
            'one'=>'1',
            'two'=>'2',
            'three'=>'3',
            'four'=>'4',
            'five'=>'5',
        ),
    );
$dataProvider = new CArrayDataProvider($grid, array(
    'keyField' => 'one'
));
$this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
        'selectableCells'=>true,
        'fixedHeader' => true,
        'headerOffset' => 40,
        // 40px is the height of the main navigation at bootstrap
        'type' => 'bordered',
        'dataProvider' => $dataProvider,
        'responsiveTable' => true,
        'template' => "{items}",
        'columns' => array(
            array(
                'name' => 'One',
                'value' => '$data["one"]',
            ),
            array(
                'name' => 'Two',
                'value' => '$data["two"]',
            ),
            array(
                'name' => 'Three',
                'value' => '$data["three"]',
            ),
            array(
                'name' => 'Four',
                'value' => '$data["four"]',
            ),
            array(
                'name' => 'Five',
                'value' => '$data["five"]',
            ),

    ),
));
$json = '{"id":1,"crawlerType":4,"items":[{"siteId":"0","urlContentResponse":null,"siteObj":{"fetchType":1,"id":"0","uDate":null,"tcDate":null,"cDate":null,"resources":null,"iterations":null,"description":null,"urls":[],"filters":[],"properties":{},"state":null,"priority":null,"maxURLs":null,"maxResources":null,"maxErrors":null,"maxResourceSize":null,"requestDelay":null,"httpTimeout":null,"errorMask":null,"errors":null,"urlType":null,"contents":null,"processingDelay":null,"size":null,"avgSpeed":null,"avgSpeedCounter":null,"userId":null,"recrawlPeriod":null,"recrawlDate":null,"maxURLsFromPage":null,"collectedURLs":null},"urlObj":{"status":2,"linksI":0,"linksE":0,"contentMask":0,"processingTime":0,"CDate":null,"mRateCounter":0,"httpTimeout":60000,"size":0,"urlPut":null,"batchId":0,"lastModified":null,"tagsCount":0,"mRate":0,"charset":"","state":0,"httpCode":0,"priority":0,"maxURLsFromPage":0,"processingDelay":0,"crawlingTime":0,"type":1,"processed":0,"totalTime":0,"siteSelect":0,"contentType":"","pDate":null,"errorMask":0,"httpMethod":"get","eTag":"","siteId":"0","freq":0,"tcDate":null,"rawContentMd5":"","crawled":0,"UDate":null,"contentURLMd5":"","requestDelay":0,"depth":0,"parentMd5":"","urlUpdate":null,"tagsMask":0,"urlMd5":"b7632cc979f402538f516e48379f9101","url":"http://www.theguardian.com/law/2015/may/15/eurosceptic-david-davis-could-oppose-government-on-human-rights-reform"},"urlPutObj":{"putDict":{},"urlMd5":"b7632cc979f402538f516e48379f9101","contentType":0,"siteId":"0","fileStorageSuffix":null,"criterions":null},"properties":{"DB_TASK_MODE":"RO","HTTP_REDIRECTS_MAX":5,"HTML_REDIRECTS_MAX":5,"HTML_RECOVER":"0","PROCESSOR_PROPERTIES":"{\"algorithm\":{\"algorithm_name\":\"user_name_algorithm\"},\"modules\":{\"user_name_algorithm\":[\"ScrapyExtractor\",\"GooseExtractor\",\"NewspaperExtractor\"]}}","template":{"templates":[{"output_format":{"name":"json","header":"[\n","items_header":"","item":"{\n\"pubdate\":\"%pubdate%\",\n\"title\":\"%title%\",\n\"description\":\"%description%\",\n\"media\":\"%media%\",\n\"author\":\"%author%\",\n\"dc_date\":\"%dc_date%\",\n\"link\":\"%link%\",\n\"keywords\":\"%keywords%\",\n\"content_encoded\":\"%content_encoded%\",\n\"html_lang\":\"%html_lang%\",\n\"pubdate_extractor\":\"%pubdate_extractor%\",\n\"title_extractor\":\"%title_extractor%\",\n\"description_extractor\":\"%description_extractor%\",\n\"media_extractor\":\"%media_extractor%\",\n\"author_extractor\":\"%author_extractor%\",\n\"dc_date_extractor\":\"%dc_date_extractor%\",\n\"link_extractor\":\"%link_extractor%\",\n\"keywords_extractor\":\"%keywords_extractor%\",\n\"content_encoded_extractor\":\"%content_encoded_extractor%\",\n\"html_lang_extractor\":\"%html_lang_extractor%\",\n\"crawler_time\":\"%crawler_time%\",\n\"scraper_time\":\"%scraper_time%\",\n\"errors_mask\":\"%errors_mask%\"\n}\n","items_footer":"","footer":"]\n"},"tags":{"pubdate":{"default":""},"title":{"default":""},"description":{"default":""},"media":{"default":""},"author":{"default":""},"dc_date":{"default":""},"link":{"default":""},"keywords":{"default":""},"content_encoded":{"default":""},"html_lang":{"default":""},"errors_mask":{"default":""}},"priority":100,"mandatory":1,"is_filled":0}],"select":"first_nonempty"}},"urlId":"b7632cc979f402538f516e48379f9101"}]}';
var_dump(json_decode($json, true));