<form id="editExperienceForm" action="{{ url('/portfolio/') }}" method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" id="editId" name="id">

    <label for="edit-judul">Judul</label>
    <input type="text" id="edit-judul" name="judul">

    <label for="edit-tahun">Periode</label>
    <input type="text" id="edit-tahun" name="tahun">

    <button type="submit">Update</button>
</form>
