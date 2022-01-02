#include<bits/stdc++.h>
using namespace std;
string s;
int dem,dem1,dem2,dem3;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    cin>>s;
    for (int i=0;i<s.size();i++)
    {
if (s[i]==65  ) dem++;
if (s[i]==67 ) dem1++;
if (s[i]==71 ) dem2++;
if (s[i]==84 ) dem3++;
       }
if (dem>=dem1 && dem>=dem2 && dem>=dem3) cout<<dem;
if (dem1>=dem && dem1>=dem2 && dem1>=dem3) cout<<dem1;
if (dem2>=dem1 && dem2>=dem && dem2>=dem3) cout<<dem2;
if (dem3>=dem1 && dem3>=dem2 && dem3>=dem) cout<<dem3;
}
