<?php
/*
Template Name: コース
*/
?>
<?php get_header(); ?>
<div class="top-course">
  <div class="top-anime-left"></div>
  <div class="top-anime-right"></div>
  <h2>Course</h2>
  <h3>-コース-</h3>
</div>
<main>
  <p class="course-des">
    コースはそれぞれ、個人のビジネス状況や技術レベルに合ったサービスを提供します。
  </p>
  <div class="container-top">
    <h2 class="underLine">Feature</h2>
    <h3>-コースの特徴-</h3>
  </div>
  <div class="suitable">
    <div class="suit-1 fadeTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/tel.jpg" alt="tel">
      <h2>1.コミュニティコース</h2>
      <p>既にご自身で案件獲得ができ、案件の遂行上相談できる相手が欲しい方にオススメです。</p>
    </div>
    <div class="suit-2 fadeTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/get_work.jpg" alt="get_work">
      <h2>2.案件獲得コース</h2>
      <p>初めての案件獲得を目指す方にオススメです。営業〜デザイン、コーディング、〜納品までの工程について、週１の個別指導でサポートします。</p>
    </div>
    <div class="suit-3 fadeTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/full_support.jpg" alt="full_support">
      <h2>3.フルサポートコース</h2>
      <p>時間はかかっても、必ず目標を達成したい志の高い方にオススメです。支払いは１度きり、個人に合ったプランで無期限でサポートします。</p>
    </div>
  </div>

  <div class="container-top">
    <h2 class="underLine">Details</h2>
    <h3>-コースの詳細-</h3>
  </div>

  <p class="details-des">
    以下８つの種類が、それぞれのコースに割り当てられています。
  </p>

  <ul class="feature-list">
    <li>1. コミュニティ参加</li>
    <li>2. 質問対応</li>
    <li>3. セミナー参加権利</li>
    <li>4. オフ会参加権利</li>
    <li>5. 個別指導</li>
    <li>6. 案件獲得支援</li>
    <li>7. 就職活動支援</li>
    <li>8. サービス期間</li>
  </ul>

  <table>
    <tr>
      <th class="course-no"><br>No.</th>
      <th>コミュニティ<br>コース</th>
      <th>案件獲得<br>コース</th>
      <th>フルサポート<br>コース</th>
    </tr>
    <tr class="table-row active-row">
      <td class="course-no">
        <span>１</span>
      </td>
      <td>◯</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>２</span>
      </td>
      <td>◯</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>３</span>
      </td>
      <td>◯</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>４</span>
      </td>
      <td>◯</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>５</span>
      </td>
      <td>×</td>
      <td>◯<br>(週１回)</td>
      <td>◯<br>(個別設定)</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>６</span>
      </td>
      <td>×</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>７</span>
      </td>
      <td>×</td>
      <td>◯</td>
      <td>◯</td>
    </tr>
    <tr class="table-row">
      <td class="course-no">
        <span>８</span>
      </td>
      <td>１ヶ月<br>更新</td>
      <td>１ヶ月<br>更新</td>
      <td>無期限</td>
    </tr>
    <tr>
      <td class="course-no">
        <span>料金<br>(税込)</span>
      </td>
      <td class="price1">月額<br><span>5,000円</span></td>
      <td class="price2">月額<br><span>49,500円</span></td>
      <td class="price3"><span>198,500円</span></td>
    </tr>
  </table>

  <div class="tab">
    <ul class="tab-menu">
      <li class="tab-menu__item active">
        <div class="active_before"></div>
        No.1
      </li>
      <li class="tab-menu__item">
        <div class="active_before"></div>
        No.2
      </li>
      <li class="tab-menu__item">
        <div class="active_before"></div>
        No.3
      </li>
      <li class="tab-menu__item">
        <div class="active_before"></div>
        No.4
      </li>
      <li class="tab-menu__item up-tab">
        <div class="active_before"></div>
        No.5
      </li>
      <li class="tab-menu__item up-tab">
        <div class="active_before"></div>
        No.6
      </li>
      <li class="tab-menu__item up-tab">
        <div class="active_before"></div>
        No.7
      </li>
      <li class="tab-menu__item up-tab">
        <div class="active_before"></div>
        No.8
      </li>
    </ul>
    <div class="tab-content">

      <div class="tab-content__item show">
        <h2>コミュニティ参加</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> コミュニティコース
            </div>
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>Slack(ビジネスチャットツール)に招待し、コンサルメンバー同士の情報交換が可能です。またイベントの告知も、こちらで行います。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>質問対応</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> コミュニティコース
            </div>
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>主にコーディングに係るエラーについて、チャット、もしくはZOOMを使い、サポートします。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>セミナー参加権利(月１回程度)</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> コミュニティコース
            </div>
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>ROTationメンバー、もしくは外部講師を招き、営業やデザイン、コーディング等に関するセミナーに参加する権利が得られます。１度実施したセミナーは動画にし、アーカイブで確認することができます。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>オフ会参加権利</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> コミュニティコース
            </div>
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>オンライン対応の他にも、オフ会を企画した際は参加する権利が得られます。飲み会やBBQ等、面と向かってメンバー同士が交流できる場をご提供します。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>個別指導</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>案件獲得コースは週１回、フルサポートコースは個人の状況に合わせてミーティングを実施し、営業、スキルに関わらず、個人の目標に合わせた総合的な指導をマンツーマンで行います。</p>
        </div>
      </div>
      <div class="tab-content__item">
        <h2>案件獲得支援</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>CrowdWorksにおける案件獲得に向け、ZOOMにより指導を行います。最短で１ヶ月半後の成果を目指すことが可能です。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>就職活動支援</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>ROTationチームはエンジニア人材紹介会社と提携を結んでおり、転職や就職を希望する方に、その機会を提供することが可能です。希望される方は、気軽にご相談ください。</p>
        </div>
      </div>

      <div class="tab-content__item">
        <h2>サービス期間</h2>
        <div class="tab-content_flex">
          <div class="course-content">
            <div class="course-name_1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> コミュニティコース
            </div>
            <div class="course-name_2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> 案件獲得コース
            </div>
            <div class="course-name_3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star"> フルサポートコース
            </div>
          </div>
          <p>コミュニティコースと案件獲得コースは１ヶ月ごとに更新、フルサポートコースは期限無しとなっています。期限を気にせず本気で取り組みたい方は、フルサポートコースがオススメです。</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-top">
    <h2 class="underLine">Interview</h2>
    <h3>-コンサル生達の声-</h3>
  </div>

  <div class="interview-content_flex">

    <div class="interview1 fadeTrigger">
      <p>コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声</p>
      <div class="h-flame">
        <img src="<?php echo get_template_directory_uri(); ?>/img/woman.png" alt="woman">
        <h3>M.Tさん 30代 女性</h3>
      </div>
    </div>

    <div class="interview2 fadeTrigger">
      <p>コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声</p>
      <div class="h-flame">
        <img src="<?php echo get_template_directory_uri(); ?>/img/man.png" alt="woman">
        <h3>A.Aさん 50代 男性</h3>
      </div>
    </div>

    <div class="interview2 fadeTrigger">
      <p>コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声コンサル生の声</p>
      <div class="h-flame">
        <img src="<?php echo get_template_directory_uri(); ?>/img/man.png" alt="woman">
        <h3>R.Oさん 30代 男性</h3>
      </div>
    </div>
  </div>

  <div class="container-top">
    <h2 class="underLine">FAQ</h2>
    <h3>-よくあるご質問-</h3>
  </div>

  <div class="question-box">
    <h3>Q. 年齢に制限はありますか？</h3>
    <div class="q-openclose" id="q-openclose1">
      <div class="vertical"></div>
      <div class="horizon"></div>
    </div>
  </div>
  <div class="answer" id="answer1">
    <p>
      A. 年齢は全く関係ありません。始めようと意志を固めたその時にスタートするのが最速で最適なタイミングです。
    </p>
  </div>

  <div class="question-box">
    <h3>Q. 始めて１ヶ月以内にWeb制作の案件獲得はできますか？</h3>
    <div class="q-openclose" id="q-openclose2">
      <div class="vertical"></div>
      <div class="horizon"></div>
    </div>
  </div>
  <div class="answer" id="answer2">
    <p>
      A. 個別に目標設定した上で、それに向けた指導を行うことは可能ですが、成果を保証するものではありません。具体的な方向性については、ご相談いただけると幸いです。
    </p>
  </div>

  <div class="question-box">
    <h3>Q. Web制作に関して全く知識が無いですが、大丈夫ですか？</h3>
    <div class="q-openclose" id="q-openclose3">
      <div class="vertical"></div>
      <div class="horizon"></div>
    </div>
  </div>
  <div class="answer" id="answer3">
    <p>
      A. 本サービスはWeb制作の案件を獲得されたことがない方や、案件の遂行上、クライアントとのやり取りやエラー解消に不安を抱えている方に最適なサービスとなっております。HTMLやCSSに１度も触れたことがない方は、まずは無料の教材で一度個人で学習されることをオススメします。その後、必要と感じられれば本サービスの受講をオススメします。
    </p>
  </div>

  <div class="question-box">
    <h3>Q. Web制作作業に取り掛かる時間があまり無いのですが大丈夫でしょうか？</h3>
    <div class="q-openclose" id="q-openclose4">
      <div class="vertical"></div>
      <div class="horizon"></div>
    </div>
  </div>
  <div class="answer" id="answer4">
    <p>
      A. 個別指導時に、各個人のスケジュールに合わせた指導が可能ですので、コース受講前に状況をお問い合わせ頂ければ、ご相談に乗ります。もし相談の中で割に合わないと感じられる場合は、辞退して頂いても全く問題はございません。
    </p>
  </div>

  <div class="question-box">
    <h3>Q. 割引は可能でしょうか？</h3>
    <div class="q-openclose" id="q-openclose5">
      <div class="vertical"></div>
      <div class="horizon"></div>
    </div>
  </div>
  <div class="answer" id="answer5">
    <p>
      A. コミュニティコースとフルサポートコースについて、学割とシングルマザー・ファザー割があります。コース受講前に証明書を提示いただければ、コミュニティコースは月額3,300円、フルサポートコースは143,000円となりますので、お問い合わせからその旨ご連絡ください。
    </p>
  </div>

  <p class="contactbutton-des fadeTrigger">
    お問い合わせは以下のボタンをクリック
  </p>



  <div class="course-contact">
    <button>
      <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ　<i class="fas fa-arrow-right"></i></a>
    </button>
  </div>

  <div id="container-top"></div>
  <div id="service"></div>
  <div id="course"></div>
  <div id="contact"></div>
</main>
<?php get_footer(); ?>