using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AGK
{
    public partial class Form4 : Form
    {
        float wynik;
        public Form4()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {

            label1.Text = string.Empty;
            var wyrazenie = textBox1.Text;
            var wyrazenieTablica = wyrazenie.ToArray();

            string liczba1 = "";
            string liczba2 = "";
            char znak = 'n';
            foreach( var wy in wyrazenieTablica)
            {

               if(wy == '+' ||  wy == '-' || wy == '*')
                {
                    if(znak == '+')
                    {
                        int l1 = int.Parse(liczba1);
                        int l2 = int.Parse(liczba2);
                        l1 = l1 + l2;
                        liczba1 = l1.ToString();
                        liczba2 = "";
                    }
                    if (znak == '-')
                    {
                        int l1 = int.Parse(liczba1);
                        int l2 = int.Parse(liczba2);
                        l1 = l1 - l2;
                        liczba1 = l1.ToString();
                        liczba2 = "";
                    }
                    if (znak == '*')
                    {
                        int l1 = int.Parse(liczba1);
                        int l2 = int.Parse(liczba2);
                        l1 = l1 * l2;
                        liczba1 = l1.ToString();
                        liczba2 = "";
                    }
                            znak = wy;
                }
                else if(znak != 'n')
                {
                    liczba2 += wy;
                }
                else
                {
                    liczba1 += wy;
                }
            }
            if(znak == '+')
            {
               wynik = int.Parse(liczba1) + int.Parse(liczba2);
               znak = 'n';
            }
            if(znak == '-')
            {
                wynik = int.Parse(liczba1) - int.Parse(liczba2);
                znak = 'n';
            }
            if (znak == '*')
            {
                wynik = int.Parse(liczba1) * int.Parse(liczba2);
                znak = 'n';
            }


            label1.Text = $"Wynik: {wynik.ToString()}";
            
        }
    }
}
