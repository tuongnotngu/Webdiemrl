#include<bits/stdc++.h>
using namespace std;
const int N=1e6;
int dem1=0,dem2=0,dem3=0,dem4=0,m;
string s;
int a[N];
int main ()
{
    if (fopen("repetitions.inp","r")){
    freopen("repetitions.inp","r",stdin);
     freopen("repetitions.out","w",stdout);}

    getline(cin,s);
    for (int i=1;i<=s.size();i++)
    {
        if (s[i]=='A') dem1++;
        if (s[i]=='C') dem2++;
        if (s[i]=='G') dem3++;
        if (s[i]=='T') dem4++;
    }
    if ((dem1>dem2) && (dem1>dem3) && (dem1>dem4)) cout << dem1;
    if ((dem2>dem1) && (dem2>dem3) && (dem2>dem4)) cout << dem2;
    if ((dem3>dem2) && (dem3>dem1) && (dem3>dem4)) cout << dem3;
    if ((dem4>dem2) && (dem4>dem3) && (dem4>dem1)) cout << dem4;
}
