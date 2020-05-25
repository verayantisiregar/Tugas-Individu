using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication8
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Operasi tmbh = new Operasi();
            tmbh.x = Convert.ToDouble(txt_satu.Text);
            tmbh.y = Convert.ToDouble(txt_dua.Text);
            tmbh.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(tmbh.tambah());
           
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Operasi krg = new Operasi();
            krg.x = Convert.ToDouble(txt_satu.Text);
            krg.y = Convert.ToDouble(txt_dua.Text);
            krg.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(krg.kurang());

        }

        private void button4_Click(object sender, EventArgs e)
        {
            Operasi kali = new Operasi();
            kali.x = Convert.ToDouble(txt_satu.Text);
            kali.y = Convert.ToDouble(txt_dua.Text);
            kali.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(kali.kali());

        }

        private void button5_Click(object sender, EventArgs e)
        {
            Operasi bg = new Operasi();
            bg.x = Convert.ToDouble(txt_satu.Text);
            bg.y = Convert.ToDouble(txt_dua.Text);
            bg.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(bg.bagi());

        }

        private void button6_Click(object sender, EventArgs e)
        {
            Operasi mdls = new Operasi();
            mdls.x = Convert.ToDouble(txt_satu.Text);
            mdls.y = Convert.ToDouble(txt_dua.Text);
            mdls.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(mdls.modulus());

        }

        private void button7_Click(object sender, EventArgs e)
        {
            Operasi pkt = new Operasi();
            pkt.x = Convert.ToDouble(txt_satu.Text);
            pkt.y = Convert.ToDouble(txt_dua.Text);
            pkt.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(pkt.pkt());

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Operasi kbk = new Operasi();
            kbk.x = Convert.ToDouble(txt_satu.Text);
            kbk.y = Convert.ToDouble(txt_dua.Text);
            kbk.z = Convert.ToDouble(txt_tiga.Text);

            txt_hasil.Text = Convert.ToString(kbk.kbk());

        }
    }
}
