<?php $title = "部屋作成"; ?>
<?php $cssLink = "../sass/createRoom.css"; ?>
<?php include("../components/header.php"); ?>
<form class="form-wrapper">
    <div class="form-sample">
        <p class="form-label">部屋の名前</p>
        <input type="text" class="form-input" placeholder="例）〇〇町お茶会部屋">
    </div>
    <div class="form-sample">
        <p class="form-label">人数制限</p>
        <div class="radio-label">
            <label>
                <input type="radio" name="maxNum" value="2">
                2人
            </label>
            <label>
                <input type="radio" name="maxNum" value="5">
                5人
            </label>
            <label>
                <input type="radio" name="maxNum" value="8">
                8人
            </label>

        </div>
    </div>
    <div class="form-sample">
        <p class="form-label">画像</p>
        <label class="form-input-file" tabindex="0">
            <input type="file" id="roomFile" name="sample" accept="image/jpeg, image/png, image/gif" multiple>画像を選ぶ→
        </label>
        <p id="fileName">選択されていません</p>
    </div>
    <input type="submit" class="form-Btn" value="部屋作成">
</form>
<?php include("../components/footer.php"); ?>