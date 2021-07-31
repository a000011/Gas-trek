<h2 id="advantages_header">
    Почему Вы должны поставить ГБО?
</h2>
<div class="advantages">
    <table id="rec">
        @foreach ($advantages as $adv)
            <tr>
                <td class="check_icon">
                    <img src="/images/icons/check.png">
                </td>
                <td class="rec_text">
                    <h2>{{ $adv }}</h2>
                </td>
            </tr>
        @endforeach
    </table>
</div>
