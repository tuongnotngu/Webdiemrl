#include<bits/stdc++.h>
using namespace std;
int main()
{
    freopen("abcs.inp","r",stdin);
    freopen("abcs.out","w",stdout);
    long long a,b,c;
    int s[7];
    for (int i=1;i<=7;i++)
        cin >> s[i];
    sort(s+1,s+8);
    a=s[1];
    b=s[2];
    c=s[7]-s[1]-s[2];
    cout << a << " " << b << " " <<c;



}
