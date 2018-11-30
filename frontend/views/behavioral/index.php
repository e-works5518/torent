<div class="main-content">
    <div class="container flex">
        <div class="main-left">
            <h1 class="content-title">Behavioral competencies | 2018</h1>
            <div class="post has-border collaboration-post relative">
                <span class="post-title semibold"><img src="assets/images/collaboration-post-icon.png" alt="">Collaboration</span>
                <p>I invest time and energy into getting to know colleagues, clients and those in the community to build meaningful, long-lasting relationships. I communicate clearly and concisely with people across all levels. I listen to what others have to say. I demonstrate confidence when interacting with others. I enable a positive client (internal/external) experience. I demonstrate my value by bringing together the best resources to solve problems with a consultative mind-set. I facilitate timely and thoughtful decision making. I collaborate across boundaries and understand the importance of teamwork to achieve shared goals.</p>
            </div>
            <div class="post has-border relative">
                <a href="javascript:void(0);" class="post-edit absolute"><i class="fas fa-pencil-alt fa-icon-prop"></i></a>
                <span class="post-title semibold">Employee comments</span>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            </div>
            <div class="post post-comments relative">
                <a href="javascript:void(0);" class="post-edit absolute give-feedback-btn"><span>Request feedback</span><i class="fas fa-plus fa-icon-prop"></i></a>
                <span class="post-title semibold">Manager’s comments</span>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Vladislav Muradyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn strongly-agree inline-block transition">Strongly agree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Gurgen Hakobyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn agree inline-block transition">Agree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
                </div>
            </div>
            <div class="post has-border leadership-post relative">
                <span class="post-title semibold"><img src="assets/images/leadership-post-icon.png" alt="">Leadership</span>
                <p>I invest in the development of others and provide meaningful, timely, balanced feedback; I want to see those I work with succeed. I motivate, inspire and guide others to be the best they can be and maximise their potential. When at work and in the community, I positively portray the Grant Thornton brand; I take pride in our work and clearly articulate its value to others. I promote the future success of the firm by growing business and recruiting top talent.</p>
            </div>
            <div class="post has-border employee-comments relative">
                <a href="javascript:void(0);" class="post-edit absolute"><i class="fas fa-pencil-alt fa-icon-prop"></i></a>
                <span class="post-title semibold">Employee comments</span>
                <textarea placeholder="Add your comment here"></textarea>
            </div>
            <div class="post post-comments relative">
                <a href="javascript:void(0);" class="post-edit absolute give-feedback-btn"><span>Request feedback</span><i class="fas fa-plus fa-icon-prop"></i></a>
                <span class="post-title semibold">Manager’s comments</span>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Vladislav Muradyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn disagree inline-block transition">Disagree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Gurgen Hakobyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn disagree inline-block transition">Disagree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
                </div>
            </div>
            <a href="javascript:void(0);" class="load-more-btn flex semibold"><i class="fas fa-plus"></i>Add objective</a>
        </div>
        <?php echo $this->render('@app/views/layouts/_right-menu.php'); ?>
    </div>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <div class="request-body">
            <strong>Goal / Objective</strong>
            <div class="request-msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
            <div class="request-feedback flex">
                <select size="1">
                    <option selected>Select manager</option>
                </select>
                <span class="or">or</span>
                <input type="text" placeholder="Enter email address">
            </div>
        </div>
        <div align="center"><button class="submit-btn transition">Request feedback</button></div>
    </div>
</div>