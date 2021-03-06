<div class="detail">
    <h2 class="m-0 mb-1">게시글 <?php if($type==='edit') { echo '수정'; } else if($type==='delete') { echo '삭제'; } else { echo '보기'; } ?></h2>
    <?php if($type==='delete') { echo '<div>게시글 삭제 시 복구가 불가능합니다.</div>'; } ?>
</div>
<div class="round shadow mb-2 p-1">
    <div>글 정보</div>
    <div class="table-container">
        <table class="board">
            <tr height="32px">
                <th class="b-head th-grey">제목</th>
                <th colspan="3" class="px-1 text-start"><?= $content->title ?></th>
            </tr>
            <tr height="32px">
                <th class="th-grey">내용</th>
                <th colspan="3" class="px-1 text-start"><?= $content->content ?></th>
            </tr>
        </table>
    </div>
    <div>글 작성시 설정한 비밀번호를 입력해주세요.</div>
    <div class="table-container">
        <form id="authentication-form">
            <table class="board">
                <tr height="32px">
                    <th class="th-grey">비밀번호</th>
                    <th colspan="3" class="px-1"><input class="txt-round w-80" type="text" name="password" autocomplete="off" placeholder="비밀번호를 입력해주세요"></th>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="d-flex justify-content-center">
    <a class="no-deco btn btn-white" href="/home/main">취소</a>
    <button type="button" class="btn btn-purple" onClick='checkPassword("<?= $type ?>", <?= $content->id ?>)'  >완료</button>
</div>
<div id="password-error" class="hidden alert">
    <div  class="round warning text-center m-auto">
        <h3 class="mb-1">비밀번호 확인</h3>
        <h4 class="m-0 mb-2">비밀번호가 일치하지 않습니다</h4>
        <div class="d-flex justify-content-center mb-2">
            <button type="button" class="btn btn-purple" onClick=changeHidden()>확인</button>
        </div>
    </div>
</div>

<script src="/assets/js/authenticate.js"></script>
