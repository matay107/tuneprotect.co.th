@extends('frontend.layout.main')

@section('page')

    <main>
        <article class="wrapper">
            @if(isset($articleImage))
                <div class="reveal">
                    <div class="main-img rotate-bg no-rotate">
                        <img src="{{url($content->pic)}}" alt="">
                    </div>
                </div>
            @endif
            <h1>การกำกับดูแลกิจการ</h1>
            <div>
                <h2>คณะกรรมการบริษัท (Board of Directors)</h2>

                <p>ทูนประกันภัย ดำเนินกิจการบนหลักบรรษัทภิบาล และการกำกับดูแลกิจการที่ดี
                    โดยกำหนดกรอบการบริหารและดูแลธุรกิจประกันภัยอย่างเป็นระบบ รวมถึงหน้าที่ของคณะกรรมการบริษัท
                    ในการกำกับดูแลการดำเนินธุรกิจ เพื่อให้เป็นไปตามเป้าประสงค์และกลยุทธ์ของบริษัท โดยคณะกรรมการบริษัทของ
                    ทูนประกันภัย มีดังต่อไปนี้</p>
                <ul>
                    <li>1. นาย สรจักร เกษมสุวรรณ - กรรมการ และประธานคณะกรรมการบริษัท</li>
                    <li>2. นาย สมชัย ไชยศุภรากุล - กรรมการ</li>
                    <li>3. นาย ธรรศพลฐ์ แบเลเว็ลด์ - กรรมการ</li>
                    <li>4. นาย โมฮัมเหม็ด รัชดิ บิน โมฮัมเหม็ด กาซาลลิ- กรรมการ และประธานคณะกรรมการตรวจสอบ</li>
                    <li>5. นาย โรฮิท จันทราเสการัน นัมเบียร์ - กรรมการ</li>
                    <li>6. นาง คูท ชิว ลิง- กรรมการ และประธานคณะกรรมการบริหารความเสี่ยง</li>
                    <li>7. นาย สิทธิชัย กฤชวิวรรธน์ - กรรมการ</li>
                </ul>

                <h2>กรอบการกำกับดูแลกิจการที่ดี (Good Corporate Governance Policy & Framework)</h2>

                <p>บริษัท ทูนประกันภัย จำกัด (มหาชน) กำหนดกรอบการกำกับดูแลกิจการที่ดี เพื่อส่งเสริมการพัฒนา จัดทำ
                    และดูแลนโยบายของบริษัท รวมถึงกำหนดหน้าที่ ความรับผิดชอบของบุคลากรที่สำคัญของบริษัท อาทิเช่น
                    คณะกรรมการบริษัท ผู้บริหารของบริษัท รวมถึงพนักงานบริษัทในการดำเนินการภายใต้วัตถุประสงค์
                    และหลักการบรรษัทภิบาล</p>

                <p>การกำกับดูแลกิจการที่ดี เป็นองค์ประกอบสำคัญในการดำเนินธุรกิจ เพื่อสร้างความโปร่งใส
                    ความรับผิดชอบต่อหน้าที่ และสร้างความเชื่อมั่นให้กับผู้ลงทุน
                    และการสร้างบทบาทหน้าที่ที่สำคัญของคณะกรรมการบริษัทในฐานะผู้นำองค์กรที่สร้างคุณค่าให้แก่กิจการอย่างยั่งยืน
                    โดยมีหลักการดังต่อไปนี้</p>

                <h3>บทบาทหน้าที่ของคณะกรรมการบริษัท</h3>

                <ul>
                    <li>1. กำหนดทิศทางและเป้าหมายเชิงกลยุทธ์ในภาพรวมของบริษัท
                        และพิจารณาอนุมัตินโยบายและกลยุทธ์ในการดำเนินงานของบริษัท

                    </li>
                    <li>2. กำกับดูให้บริษัทมีนโยบายการดำเนินงานที่เหมาะสมทั้งในส่วนของ
                        นโยบายป้องกันความขัดแย้งทางผลประโยชน์ นโยบายและกระบวนการแจ้งเบาะแสภายในองค์กร
                        นโยบายการจ่ายค่าตอบแทน รวมถึง จรรยาบรรณและจริยธรรมทางธุรกิจ

                    </li>
                    <li>3. กำกับดูแลให้บริษัทมีกระบวนการ และกลไลในการควบคุม ติดตาม และตรวจสอบที่มีประสิทธิผล
                        ทั้งในเรื่องการกำหนดโครงสร้างบริษัท การกำกับดูแลให้บริษัทมีระบบการบริหารความเสี่ยงที่เหมาะสม
                        การพิจารณาแต่งตั้งคณะกรรมการชุดย่อยของบริษัท การกำกับดูแลการสอบบัญชีของบริษัท
                        การประเมินผลการปฏิบัติงานของคณะกรรมการบริษัท
                        การกำกับดูแลให้บริษัทมีการเปิดเผยข้อมูลด้านการกำกับดูแลกิจการที่ดี
                        และการกำกับดูแลเรื่องการจัดทำรายงานการเงินของบริษัท
                    </li>
                    <li>4. ติดตามกำกับดูแลการดำเนินงานของบริษัทอย่างต่อเนื่อง
                        ทั้งในกิจกรรมการกำกับดูแลด้านการปฏิบัติตามกฎหมาย การดำเนินงานของผู้บริหาร
                        การกำกับดูแลให้บริษัทมีเงินกองทุนที่มั่นคง
                        การกำกับดูแลให้ผู้บริหารรายงานเรื่องที่สำคัญต่อคณะกรรมการบริษัท
                        และการกำกับดูแลให้บริษัทมีการปฏิบัติต่อลูกค้าอย่างเป็นธรรม
                    </li>
                </ul>

                <h3>บทบาทหน้าที่ของผู้บริหาร
                </h3>

                <ul>
                    <li>1. ปฏิบัติตามกลยุทธ์และนโยบายของบริษัทอย่างมีประสิทธิภาพโดยคำนึงถึงการสร้างมูลค่าในระยะยาว
                        และการดำเนินธุรกิจอย่างยั่งยืน
                    </li>
                    <li>2. ส่งเสริม สนับสนุน และดำเนินการให้บริษัท มีการบริหารจัดการความเสี่ยงที่มีประสิทธิภาพ
                        มีระบบการควบคุมภายในที่เหมาะสม มีการปฏิบัติตามกฎหมายที่เกี่ยวข้องได้อย่างถูกต้อง
                        และปฏิบัติต่อผู้เอาประกันอย่างเป็นธรรม
                    </li>
                    <li>3. รายงานข้อมูลที่สำคัญเกี่ยวกับผลการดำเนินงานของบริษัท ระดับความเสี่ยงของบริษัท
                        และผลการปฏิบัติงานของผู้บริหารต่อคณะกรรมการบริษัท
                    </li>
                    <li>4. ส่งเสริมให้บริษัทมีวัฒนธรรมการบริหารความเสี่ยง ดูแล
                        และควบคุมความเสี่ยงของบริษัทให้อยู่ในระดับความเสี่ยงที่ยอมรับได้ ตามที่คณะกรรมการบริษัทกำหนด
                    </li>
                </ul>

                <p>นอกจากนั้นบริษัทมีระบบการควบคุมภายในที่เหมาะสม เพื่อช่วยให้คณะกรรมการบริษัท
                    และผู้บริหารปฏิบัติภารกิจให้บรรลุสำเร็จตามหน้าที่ความรับผิดชอบของแต่ละบุคคลในการควบคุมและบริหารงานบริษัท
                    รวมถึงการคำนึงถึงส่วนได้เสียของผู้ถือหุ้นและการปฏิบัติต่อลูกค้าอย่างเป็นธรรม
                    ภายใต้หลักการปฏิบัติความรับผิดชอบต่อตลาด (Market Conduct Principles)
                </p>
                <hr/>
                <h2>การควบคุมภายใน</h2>

                <p>การควบคุมภายใน เป็นส่วนหนึ่งของกรอบบรรษัทภิบาล
                    เพื่อส่งเสริมการดำเนินงานของบริษัทให้มีความมั่นคงและแข็งแกร่ง โดยระบบการควบคุมภายใน ครอบคลุมถึง
                    ระบบเทคโนโลยีสารสนเทศ กระบวนการและนโยบายการเงิน รวมถึงการรายงานทางบัญชีและการเงิน
                    การบริหารความเสี่ยงที่เกี่ยวข้อง และการปฏิบัติตามกฎหมายและกฎเกณฑ์ของทางการ ทั้งนี้
                    โครงสร้างการควบคุมภายในของบริษัท มีดังต่อไปนี้</p>

                <ul>
                    <li>1. คณะกรรมการบริษัทมีหน้าที่ในการดูแลภาพรวมของระบบการควบคุมภายใน ตรวจสอบนโยบาย รวมถึงกำกับดูแล
                        เพื่อให้บริษัทมีการควบคุมภายในอย่างถูกต้องและเหมาะสม

                    </li>
                    <li>2. การบริหาร และควบคุมภายใน โดยผู้บริหารและพนักงานของบริษัท และรับผิดชอบในการบริหารงาน
                        การให้คำแนะนำ ควบคุมในฐานะที่เป็นผู้รับผิดชอบระดับแรก (1st Line of Responsibilities)
                        เพื่อให้การควบคุมภายในเป็นไปอย่างมีประสิทธิภาพมากที่สุด

                    </li>
                    <li>3. ฝ่ายกำกับดูแลธุรกิจ ฝ่ายบริหารความเสี่ยง มีหน้าที่ติดตามการดำเนินงานของพนักงานในหน่วยธุรกิจ
                        รวมถึงให้คำแนะนำและดำเนินการใดๆ เพื่ออำนวยความสะดวกต่อการบริหารความเสี่ยง
                        ตามหน้าที่ของผู้รับผิดชอบระดับที่สอง (2nd Line of Responsibilities)

                    </li>
                    <li>4. ฝ่ายตรวจสอบภายใน มีหน้าที่ตรวจสอบและประเมินประสิทธิภาพของการดำเนินงานของบริษัท
                        การบริหารความเสี่ยงและการปฏิบัติตามกฎหมาย ตามหน้าที่ของผู้รับผิดชอบระดับที่สาม (3rd Line of
                        Responsibilities)
                    </li>
                    <li>5. บริษัทได้ส่งเสริมวัฒนธรรมการบริหารความเสี่ยง การปฏิบัติตามกฎเกณฑ์ เพื่อให้การดำเนินธุรกิจ
                        หรือการดำเนินงานของหน่วยธุรกิจเป็นไปอย่างถูกต้องและเหมาะสมตามกฎหมาย
                    </li>
                    <li>6. การปกป้องข้อมูลของบริษัท และลูกค้าเป็นหนึ่งในหลักการดำเนินธุรกิจของบริษัท
                        บริษัทมีมาตรการในการคุ้มครองข้อมูลส่วนบุคคลของลูกค้าอย่างเข้มงวด รวมถึงกระบวนการในการเก็บ รวบรวม
                        ใช้ และเปิดเผยข้อมูลส่วนบุคคล
                        ซึ่งจะต้องสอดคล้องกับวัตถุประสงค์และแนวทางตามที่ได้กำหนดไว้ในนโยบายข้อมูลส่วนบุคคลของบริษัท
                    </li>
                </ul>
                <hr/>
                <h2>คณะกรรมการชุดย่อย</h2>

                <h3 class="text-secondary" style="text-decoration: underline;font-size: 1.2rem;">คณะกรรมการตรวจสอบ
                    (Audit Committee)</h3>

                <h4>รายชื่อคณะกรรมการตรวจสอบ</h4>

                <ul>
                    <li>1. นายโมฮัมเหม็ด รัชดิ บิน โมฮัมเหม็ด กาซาลลิ - ประธานคณะกรรมการตรวจสอบ
                    </li>
                    <li>2. นายสมชัย ไชยศุภรากุล - กรรมการตรวจสอบ
                    </li>
                    <li>3. ดร.สรจักร เกษมสุวรรณ - กรรมการตรวจสอบ
                    </li>
                </ul>

                <h4>หน้าที่คณะกรรมการตรวจสอบ
                </h4>

                <ul>
                    <li>1. พิจารณา อนุมัติ และกำกับดูแลให้บริษัทปฏิบัติตามนโยบายที่สำคัญของบริษัท อาทิเช่น
                        นโยบายควบคุมภายใน นโยบายต่อต้านคอรัปชั่นและสินบน
                        นโยบายป้องกันและปราบปรามการฟอกเงินและการสนับสนุนทางการเงินแก่การก่อการร้าย
                        นโยบายป้องกันความขัดแย้งทางผลประโยชน์ นโยบายบริหารความเสี่ยงด้านกลฉ้อฉล

                    </li>
                    <li>2. กำกับดูแลให้บริษัทมีการจัดทำรายงานทางการเงินที่น่าเชื่อถือ รวมถึง พิจารณาแต่งตั้ง
                        และถอดถอนผู้ตรวจสอบบัญชีของบริษัท กำหนดให้ผู้สอบบัญชีจัดทำรายงาน (Management Letter)
                        และข้อคิดเห็นจากผู้บริหารระดับสูงและเสนอต่อคณะกรรมการบริษัท
                        และจัดให้มีการประชุมระหว่างคณะกรรมการตรวจสอบและผู้สอบบัญชีอย่างเป็นประจำ

                    </li>
                </ul>

                <p>กำกับดูแลให้บริษัทปฏิบัติตามกฎหมาย กฎ และระเบียบต่างๆ ที่เกี่ยวข้องกับการดำเนินธุรกิจของบริษัท
                    และดูแลให้ผู้บริหารรายงานเรื่องที่สำคัญของบริษัท
                    เพื่อให้คณะกรรมการบริษัทได้รับข้อมูลอย่างเพียงพอที่จะปฏิบัติตามอำนาจ หน้าที่ และ
                    ความรับผิดชอบได้อย่างสมบูรณ์</p>
                <br/>
                <h3 class="text-secondary" style="text-decoration: underline;font-size: 1.2rem;">
                    คณะกรรมการบริหารความเสี่ยง (Risk Management Committee)
                </h3>
                <h4>รายชื่อคณะกรรมการบริหารความเสี่ยง
                </h4>

                <ul>
                    <li>1. นางคูท ชิว ลิง - ประธานคณะกรรมการบริหารความเสี่ยง</li>
                    <li>2. นายสมชัย ไชยศุภรากุล - กรรมการบริหารความเสี่ยง</li>
                    <li>3. นายเบน อาศนะเสน - กรรมการบริหารความเสี่ยง
                    </li>
                    <li>4. นางสาวรัตติพร ลีลาปัญญาเลิศ - กรรมการบริหารความเสี่ยง
                    </li>
                    <li>5. นางเซ็ง ซู วี - กรรมการบริหารความเสี่ยง
                    </li>
                </ul>
                <h4>หน้าที่ของคณะกรรมการบริหารความเสี่ยง
                </h4>

                <ul>
                    <li>1. กำหนดและพิจารณาทบทวนกรอบการบริหารความเสี่ยง นโยบายบริหารความเสี่ยง ขอบเขตการบริหารความเสี่ยง
                        ครอบคลุมความเสี่ยงประเภทต่างๆที่สำคัญ ซึ่งอาจส่งผลต่อรายได้ เงินกองทุน ชื่อเสียง การดำเนินงาน
                        หรือการดำรงเงินกองทุนของบริษัท

                    </li>
                    <li>2.
                        กำกับดูแลและสนับสนุนให้มีการดำเนินงานด้านการบริหารความเสี่ยงที่สอดคล้องกับกลยุทธ์และเป้าหมายในการดำเนินธุรกิจ
                        ประเมินความเพียงพอและมาตรการบริหารความเสี่ยง รวมถึงประสิทธิภาพในการบริหารความเสี่ยงของบริษัท

                    </li>
                    <li>3. จัดให้มีการประชุมเพื่อติดตามสถานะความเสี่ยง
                        รวมถึงความคืบหน้าในการบริหารความเสี่ยงและให้ข้อเสนอแนะเพื่อปรับปรุงแก้ไขให้สอดคล้องกับกรอบการบริหารความเสี่ยง
                        นโยบายและกลยุทธ์ของบริษัท และรายงานให้คณะกรรมการบริษัทรับทราบ
                    </li>
                    <li>4. สนับสนุนการดำเนินงานของหน่วยงานบริหารจัดการความเสี่ยง
                        เพื่อให้บรรลุเป้าหมายการบริหารความเสี่ยงขององค์กร

                    </li>
                </ul>
                <br/>
                <h3 class="text-secondary" style="text-decoration: underline;font-size: 1.2rem;">คณะกรรมการการลงทุน
                    (Investment Committee)</h3>
                <h4>รายชื่อคณะกรรมการการลงทุน
                </h4>
                <ul>
                    <li>1. นางสาวรัตติพร ลีลาปัญญาเลิศ - ประธานคณะกรรมการลงทุน</li>
                    <li>2. นายสมชัย ไชยศุภรากุล - กรรมการการลงทุน</li>
                    <li>3. นายฮาว คิม เลียน - กรรมการการลงทุน
                    </li>
                </ul>
                <h4>หน้าที่ของคณะกรรมการการลงทุน
                </h4>
                <ul>
                    <li>1. จัดทำกรอบนโยบายการลงทุน และเสนอต่อคณะกรรมการบริษัทเพื่อพิจารณาอนุมัติ</li>
                    <li>2. พิจารณาอนุมัติแผนการลงทุนของบริษัทเพื่อสอดคล้องกับนโยบายการลงทุน
                        และนโยบายบริหารความเสี่ยงของบริษัท
                    </li>
                    <li>3. กำกับดูแลการลงทุนของบริษัท ให้สอดคล้องกับนโยบายการลงุทน และตามที่กฎหมายกำหนด
                    </li>
                    <li>4. กำกับดูแลรายงานและบุคลากรที่เกี่ยวข้อง เพื่อความเพียงพอต่อการดำเนินงานด้านการลงทุน
                    </li>
                    <li>5. บริหารเงินทุนตามกรอบนโยบายการลงทุน และรายงานผลการลงทุนแก่คณะกรรมการของบริษัท</li>
                </ul>
                <br/><br/>
            </div>
        </article>
    </main>
@endsection