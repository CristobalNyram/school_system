'use-scritc';


function uppercaseLetters(e)
{

    let ss = e.target.selectionStart;
    let se = e.target.selectionEnd;
    let reg =new RegExp(/^[A-Za-z0-9\s]+$/g);
    e.target.value = e.target.value.toUpperCase();
    e.target.selectionStart = ss;
    e.target.selectionEnd = se;
    value=e.target.value;
    if (!reg.test(value)) {


                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Solo se permite letras.',
                showConfirmButton: false,
                timer: 1500
                });
                e.target.value='';
    }

}

